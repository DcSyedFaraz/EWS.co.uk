<?php

namespace App\Http\Controllers\Customer;

use App\Invoice;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        // return asset('imgs/admin/no-image.jpg');
        $orders = Order::with('invoice')->where('user_id', Auth::user()->id)->get('status_id');
        $invoices=Invoice::where('user_id',Auth::user()->id)->get('status_id');
        $latestOrders = Order::with('invoice')->where('user_id', Auth::user()->id)->whereDate('created_at', Carbon::today())->get();

        //  return $latestOrders;

        $data = [
            'totalOrders' => $orders->count(),
            // 'clearInvoices' =>  $orders->pluck('invoice')->where('status_id', 5)->count(),
            'clearInvoices' => $invoices->where('status_id',5)->count(),
            'pendingInvoices' => $invoices->where('status_id', 4)->count(),
        ];

        // return $data['clearInvoices'];
        return view('customer.home', compact('data', 'latestOrders'));
    }
}
