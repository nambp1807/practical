<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function form(){
        return view('form_student');
    }

}
