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
            "name"=>"required|string|unique:name",
            "age"=> "required|Integer",
            "address"=> "required|string",
            "telephone"=> "required|string"]);

        try{
            User::create([
                "name"=> $request->get("name"),
                "age"=> $request->get("email"),
                "address"=> $request->get("password"),
                "telephone"=> $request->get("password"),
            ]);
        }catch(\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("user");
    }

}
