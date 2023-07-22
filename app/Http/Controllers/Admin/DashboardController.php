<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ordersCount = Order::count();
        $contactQueriesCount = Contact::count();
        $contactBlog = Blog::count();
        $pendingOrdersCount = Order::where('is_complete', '=', false)->count();
        $recentOrders = Order::where('created_at', '>=', Carbon::today())->orderBy('id', 'DESC')->get();

        $data = [
            "ordersCount"           => $ordersCount,
            "contactBlog"           => $contactBlog,
            "contactQueriesCount"   => $contactQueriesCount,
            "pendingOrdersCount"    => $pendingOrdersCount,
            "recentOrders"          => $recentOrders,
        ];

        return view('admin.index', compact('data'));
    }

    public function getSlug(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        return Str::slug($request->title);
    }
}
