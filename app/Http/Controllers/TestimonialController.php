<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        return view("admin.crud.testimonial.index");
    }


    public function save(Request $request)
    {
        $request->validate([
            'technology_name' => 'required|unique:technology,technology_name|max:20',
            'technology_description' => 'required|max:200',
        ]);
        $technology = new Technology();
        $technology->technology_name = $request->technology_name;
        $technology->technology_description = $request->technology_description;
        $technology->technology_icon = $request->technology_icon;
        $technology->save();
        return redirect()->back()->with('success', 'Technology created successfully.');
    }

    public function list()
    {
        $allRecords = Technology::all();
        return $allRecords;
    }

}
