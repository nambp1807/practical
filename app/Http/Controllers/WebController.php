<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function user(){
        $user = User::all();
        return view('user',['user'=>$user]);
    }

    public function userCreate(){
        return view('userCreate');
    }

    public function userStore(Request $request){
        $request->validate([
            "name" => "required|string",
            "age" => "required|numeric",
            "address" => "required|string",
            "telephone" => "required|string"
        ]);
        try {
            User::create([
                "name" => $request->get("name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone")
            ]);
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->to("/");
    }

}
