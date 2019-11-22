<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class CoursesController extends Controller
{
    //
    public function index()
    {
        return view("admin.crud.courses.index");
    }


    public function save(Request $request)
    {
        $request->validate([
            'course_name' => 'required|unique:courses,course_name|max:20',
            'course_description' => 'required|max:200',
        ]);
        $course = new Courses();
        $course->course_name = $request->course_name;
        $course->course_description = $request->course_description;
        $course->course_icon = $request->course_icon;
        $course->save();
        return redirect()->back()->with('success', 'Course created successfully.');
    }

    public function list()
    {
        $allRecords = Courses::all();
        return $allRecords;
    }

}
