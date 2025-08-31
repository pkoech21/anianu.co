<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'dob'        => $request->dob,
            'gender'     => $request->gender,
            'state'      => $request->state,
            'city'       => $request->city,
            'pincode'    => $request->pincode,
            'position'   => $request->position,
            'social_profile' => $request->social_profile,
            'instagram'  => $request->instagram,
            'youtube'    => $request->youtube,
            'facebook'   => $request->facebook,
            'password'   => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('welcome')->with('success', 'Account created successfully!');
    }
}
