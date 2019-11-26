<?php

namespace App\Http\Controllers;

use App\CourseMaterial;
use App\Courses;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
 
class CourseMaterialController extends AdminController
{
    public function __construct()
    {
        parent::addVisit();
    }
    
    public function index()
    {
        $data = Courses::all();
        return view("admin.crud.course_material.index")->with(compact('data'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'course_material_theme' => 'required|unique:course_material,course_material_theme|max:20',
            'course_id' => 'required|max:200',
            'course_material_content' => 'required|max:20000'
        ]);

        $originalImage = $request->file('course_material_image');
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

        $obj = new CourseMaterial();
        $obj->course_material_theme	 = $request->course_material_theme;
        $obj->course_id = $request->course_id;
        $obj->course_material_content = $request->course_material_content;
        $obj->course_material_image = $imageName;
        $obj->save();
        return redirect()->back()->with('success', 'Course Page added successfully.');
    }

    public function list()
    {
        $allRecords = CourseMaterial::all();
        return $allRecords;
    }

}
