<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyHoursPost;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        $users = User::all();
        return view('home');
    }
}
