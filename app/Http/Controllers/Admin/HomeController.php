<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {

        //dd(config('auth.defaults.guard'));
        // return Auth::user()->roles;
        //  getIsAdminAttribute

        return view('admin.home');
    }
}
