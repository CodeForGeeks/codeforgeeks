<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Team;
use App\Technology;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        $mycourses = Courses::all();
        $technologies = Technology::all();
        $team = Team::all();
        return view("frontend.index")->with(compact('mycourses', 'technologies', 'team'));
    }
}
