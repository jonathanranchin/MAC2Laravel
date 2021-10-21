<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addUser(Request $request){
        return User::create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'postalCode' => $request->input('postalCode'),
            'City' => $request->input('city'),
            'Comment' => $request->input('comment')
        ]);
    }
}
