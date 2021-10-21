<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('first_name', 'email'));

        if ($request->input('password')) {
            auth()->user()->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'postalCode' => $request->input('postalCode'),
                'city' => $request->input('city'),
                'comment' => $request->input('comment'),
                'password' => bcrypt($request->input('password'))
            ]);
        }

        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }

    public function change(UpdateProfileRequest $request)
    {
        if (auth()->user()->id==1||user()->id==auth()->user()->id) {
            user()->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'postalCode' => $request->input('postalCode'),
                'city' => $request->input('city'),
                'comment' => $request->input('comment'),
                'password' => bcrypt($request->input('password'))
            ]);
        }

        return redirect()->route('profiles')->with('message', 'Profile saved successfully');
    }
}
