<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        $mycourses = Courses::all();
        return view("frontend.index")->with(compact('mycourses'));
    }
}
