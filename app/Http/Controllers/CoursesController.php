<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    public function index()
    {
        return view("admin.crud.courses.index");
    }


    public function save(Request $request)
    {
        return view("admin.crud.courses.index");
    }
}
