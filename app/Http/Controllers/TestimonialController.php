<?php

namespace App\Http\Controllers;

use App\Technology;
use App\Testimonials;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends AdminController
{
    public function __construct()
    {
        // parent::__construct();
        parent::addVisit();
    }
    public function index()
    {
        return view("admin.crud.testimonial.index");
    }


    public function save(Request $request)
    {
        $request->validate([
            'testimonial_client' => 'required|unique:testimonial,testimonial_client|max:20',
            'testimonial_position' => 'required|max:200',
            'testimonial_message' => 'required|max:200',
            'testimonial_image' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $originalImage = $request->file('testimonial_image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path() . '/thumbnail/';
        $originalPath = public_path() . '/images/';
        $time = time();
        $imageName= $time . $originalImage->getClientOriginalName();

        $OriginalImageName = $originalPath . $time . $originalImage->getClientOriginalName();
        $thumbnailImage->save($OriginalImageName);

        $thumbnailImage->fit(200);
        $ThumbnailImageName = $thumbnailPath . $time . $originalImage->getClientOriginalName();
        $thumbnailImage->save($ThumbnailImageName);

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
