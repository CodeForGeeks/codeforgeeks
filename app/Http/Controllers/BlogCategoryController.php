<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        return view("admin.crud.testimonial.index");
    }


    public function save(Request $request)
    {
        $request->validate([
            'testimonial_client' => 'required|unique:testimonial,testimonial_client|max:20',
            'testimonial_position' => 'required|max:200',
        ]);

        $testimonial = new Testimonials();
        $testimonial->testimonial_client	 = $request->testimonial_client	;
        $testimonial->testimonial_position = $request->testimonial_position;
        $testimonial->testimonial_message = $request->testimonial_message;
        $testimonial->testimonial_client_image = $imageName;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonials added successfully.');
    }

    public function list()
    {
        $allRecords = Testimonials::all();
        return $allRecords;
    }
}
