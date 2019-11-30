<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class CoursesController extends AdminController
{
    //
    public function __construct()
    {
        // parent::__construct();
        parent::addVisit();
    }
    public function index()
    {
        return view("admin.crud.courses.index");
    }


    public function save(Request $request)
    {
        $request->validate([
            'course_name' => 'required|unique:courses,course_name|max:20',
            'course_url' => 'required|max:50',
            'course_description' => 'required|max:200',
        ]);
        $course = new Courses();
        $course->course_name = $request->course_name;
        $course->course_description = $request->course_description;
        $course->course_url = $request->course_url;
        $course->course_icon = $request->course_icon;
        $course->save();
        return redirect()->back()->with('success', 'Course created successfully.');
    }

    public function list()
    {
        $allRecords = Courses::all();
        return $allRecords;
    }

    public function getcourses(Request $request, $coursename)
    {
        try {
            $getCourseList = Courses::where("course_url", $coursename)->get();
            $data =$getCourseList[0]->material()->get();
            // dd($data);
    
            $allCourses = Courses::all();
            $navbardata =[];
            $count = 0;
            foreach ($allCourses as $key ) {
                $navbardata[$count] = $key->material()->get();
                $count= $count + 1;
            }
            // dd($allCourses[0]);
            return view("frontend.course_layout.index")->with(compact('data',"coursename",'navbardata','allCourses'));    
        } catch (\Throwable $th) {
            abort(404); 
        }
    }
}
