<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function form(){
        return view('form_student');
    }

    public function postFeedback(Request $request){
        try {
            $feedback = Student::create([
                "name" => $request->get("name"),
                "email" => $request->get('email'),
                "telephone" => $request->get('tel'),
                "feedback" => $request->get('feedback')
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false, 'message' => "Get survey success",
            ], 200);
        }
        return response()->json([
            'status' => true, 'message' => "Get survey success",
        ], 200);

    }
}
