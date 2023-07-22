<?php

namespace App\Http\Controllers\Customer;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $countries = Country::all();

        return view('customer.profile.edit', compact('user', 'countries'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $user->update($request->all());

        return redirect()->back()->with(['success' => 'Your profile successfully updated.']);
    }

    public function changePassword()
    {
        $user = Auth::user();

        return view('customer.profile.change-password', compact('user'));
    }

    public function changePasswordUpdate(Request $request)
    {
        //return $request->all();

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->current_password, $hashedPassword) && $request->new_password == $request->new_password_confirmation) {
            // The passwords match...

            $user = Auth::user();
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->back()->with(['success' => 'Your password successfully updated.']);
        }

        else{
            return redirect()->back()->with(['danger' => 'Your password does not successfully updated.']);
        }


    }
}
