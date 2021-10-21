<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function controlleurMethod(){
        return view("welcome");
    }
    public function addUser(/*Request $request*/){
        /*
        return User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'postalCode' => $request->postalCode,
            'City' => $request->City,
            'Comment' => $request->Comment
        ]);
        */
        return response()->json([
            'msg' => "error"
        ], 419);
    }
}
