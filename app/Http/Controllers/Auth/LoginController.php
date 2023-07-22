<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Login the admin.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // return $request;
        $this->validator($request);
        // return $this;
        // dd('customer login');
        // dd(Auth::attempt($request->only('email','password'), $request->filled('remember')));
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {

            // ->hasRoleId(2)
            if (Auth::user()->hasRoleId(2)) {
                // dd(Auth::user());
                return redirect(route('customer.home'))->with('status', 'You are Logged in as Customer!');
            } else {
                // dd('need to login');
                //Authentication passed...
                return redirect(route('admin.home'))->with('status', 'You are Logged in as Admin!');
            }
        }

        return $this->loginFailed();
    }


     private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:users|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',

        ];

        //validate the request.
        $request->validate($rules,$messages);
    }


     private function loginFailed()
    {
        // dd('wrong credentialas');
        return redirect()
        ->back()
        ->withInput()
        ->with('error','Login failed, please enter correct credentials!');
        // ->with('error','Wrong password or this account not approved yet.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
}
