<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Team;
use App\Technology;
use App\Testimonials;
use Illuminate\Http\Request;

class WebsiteController extends AdminController
{
    //
    public function index()
    {
        $mycourses = Courses::all();
        $technologies = Technology::all();
        $team = Team::all();
        $testimonials = Testimonials::all();
        return view("frontend.index")->with(compact('mycourses', 'technologies', 'team', 'testimonials'));
    }
}
