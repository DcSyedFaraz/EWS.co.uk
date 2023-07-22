<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PagesController extends Controller
{
    public function index(){
        $paper_types=PaperType::orderBy('id', 'ASC')->get();
        $academic_levels=AcademicLevel::orderBy('id','ASC')->get();
        $deadlines=Deadline::orderBy('id','ASC')->get();
        $fares = Fare::all();

        return view('pages.home',compact('paper_types','academic_levels','deadlines', 'fares'));
    }

    public function price(){
        return view('pages.pricing');
    }

    public function reviews(){
        return view('pages.reviews');
    }

    public function about(){
        //   Artisan::call('cache:clear');
        //   Artisan::call('view:clear');
        //   Artisan::call('config:cache');
        //   Artisan::call('config:clear');
        //   Artisan::call('optimize');
        //   Artisan::call('storage:link');
        //   dd("Cache is cleared");

        return view('pages.about');
    }

    public function getFare(Request $request)
    {
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();

    }
}
