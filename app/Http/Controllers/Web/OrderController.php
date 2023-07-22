<?php

namespace App\Http\Controllers\Web;



use App\AcademicLevel;
use App\Country;
use App\User;
use App\Invoice;
use App\Deadline;
use App\Events\OrderCreated;
use App\Fare;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Order;
use App\PaperType;
use App\RefrenceStyle;
use App\Subject;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function create()
    {
        $paper_types = PaperType::orderBy('id', 'ASC')->get();
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = RefrenceStyle::orderBy('id', 'ASC')->get();
        $subjects = Subject::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        $web_setting=WebSetting::first();
        $fares = Fare::all();

        return view('pages.order', compact('paper_types', 'academic_levels', 'deadlines', 'reference_styles', 'subjects', 'countries','web_setting', 'fares'));
    }

    // public function store(StoreOrderRequest $request)
    // {
    // //    return $request->email;
    //     if ($request->hasfile('emailAttachments')) {
    //         $fileSize = 0;
    //         $fileQty = 0;
    //         foreach ($request->file('emailAttachments') as $file) {
    //             $fileSize += $file->getSize();
    //             $fileQty = $fileQty + 1;
    //         }

    //         if ($fileQty > 10) {
    //             $request->session()->flash('message', 'file quantity exceeded the limit.');
    //             return redirect()->route('order');
    //         }

    //         if ($fileSize >  25000000) {
    //             $request->session()->flash('message', 'file size exceeded the limit.');
    //             return redirect()->route('order');
    //         }
    //     }

    //     $files = [];

    //     if ($request->spacing == 2) {
    //         $request->merge(['spacing' => true]);
    //     }

    //     else{
    //         $request->merge(['spacing' => false]);
    //     }

    //     //Dynamic getting price from database according to deadline and Academic level
    //     $fare = Fare::where(['academic_level_id' => $request->academic_level, 'deadline_id' => $request->deadline])->firstOrFail();
    //     $request->merge([
    //         'cost_per_page' => $fare->per_page_price,
    //         "total_price" => ($fare->per_page_price * $request->number_of_pages),
    //         'academic_level' => $fare->academic_level->name,
    //         'deadline' => $fare->deadline->name,
    //     ]);
    //     DB::beginTransaction();
    //     $order = Order::create($request->all());
    //     if ($request->hasfile('emailAttachments')) {
    //         foreach ($request->file('emailAttachments') as $file) {
    //             $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
    //             $filePath = $file->storeAs('uploads', $fileName, 'public');

    //             array_push($files, $filePath);

    //             File::create([
    //                 "order_id" => $order->id,
    //                 "file_path" => $filePath
    //             ]);
    //         }
    //     }
    //     // Send mail to user
    //      Mail::to($request->email)->send(new OrderMail($request, $files));

    //     // Send mail to admin
    //      Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')) )->send(new OrderAdminMail($request, $files));
    //     DB::commit();

    //     //  return $order;
    //     return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");
    // }


    public function store(StoreOrderRequest $request)
    {
        $user = User::Where(['email' => $request->email])->first();
        $password = Str::random(8);
        $flag = false;
        //dd(User::all(),$user->getTable(),env('DB_DATABASE'));
        // Validating Multiple Files
        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                return redirect()->route('order');
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                return redirect()->route('order');
            }
        }

        //Dynamic getting price from database according to deadline and Academic level
        $fare = Fare::where(['academic_level_id' => $request->academic_level, 'deadline_id' => $request->deadline])->firstOrFail();

        DB::beginTransaction();

        if (!$user) {

            $flag = true;
            $user = User::create(

                [
                    'name' => request('name'),
                    'email' => request('email'),
                    'phone' => request('phone'),
                    'country' => request('country'),
                    'password' => Hash::make($password),
                ]
            );

            // $request->merge(['user_id' => $user->id]);
            $user->roles()->sync(2);
            session()->flash('userData', ['userEmail' => 'Customer Account' . ' ' . $user->email . ' ' . 'created successfully check your email for login credentials', 'userId' => $user->id]);
            //dd('new user');
        }

        $request->merge([
            'cost_per_page' => $fare->per_page_price,
            "total_price" => ($fare->per_page_price * $request->number_of_pages),
            'academic_level' => $fare->academic_level->name,
            'deadline' => $fare->deadline->name,
            'user_id'  => $user->id,
        ]);

        $files = [];

            $order = Order::create($request->all());

            $invoice = Invoice::create([
                "ref_no" => Str::uuid()->toString(),
                "amount" => ($fare->per_page_price * $request->number_of_pages),
                "order_id" => $order->id,
                "user_id" => $user->id,
                "gateway" => "stripe",
                "currency" => "gbp",
            ]);

            //dd($order);
            // $styleName=$order->styleFunc->name;
            // $paperTypeName=$order->Papertype->name;
            // $subjectName=$order->subject->name;

            $styleName=$order->style;
            $paperTypeName=$order->Papertype;
            $subjectName=$order->subject_area;

            // check if have some files attache tha add into db with respect to order id
            if ($request->hasfile('emailAttachments')) {
                foreach($request->file('emailAttachments') as $file)
                {
                    $fileName = uniqid().'_'.time().'_'.$file->getClientOriginalName();
                    $filePath = $file->storeAs( 'uploads' , $fileName, 'public');

                    array_push( $files, $filePath);

                    File::create([
                         "order_id" => $order->id,
                         "file_path" => $filePath
                    ]);
                }
            }

            $data = ['order' => $order,'files'=>$files,'styleName' => $styleName,
            'paperTypeName'=>$paperTypeName,'subjectName' => $subjectName, 'flag' => $flag,
            'user' => $user,'invoice' => $invoice, 'password' => $password];
            //dd($data,$data['order']->paperType->name,$data['order']['reference']);
            // Mail::to($request->email)->send(new OrderMail($data,$order));

            // Send mail to admin
            //  Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')) )->send(new OrderAdminMail($request, $files,$order, $styleName,$paperTypeName,$subjectName));

        DB::commit();


        // return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");
        return redirect()->route('invoice', ['reference' => $invoice->ref_no]);
    }


    public function invoice(Request $request)
    {

        if ($request->query('reference')) {
            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4])->with('order')->firstOrFail();
            $order = Order::where(['id' => $invoice->order_id])->firstorFail();

            return view('pages.invoice', compact('invoice', 'order'));
        }
    }
}
