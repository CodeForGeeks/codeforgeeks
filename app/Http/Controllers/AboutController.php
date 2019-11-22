<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view("admin.crud.about.index");
    }


    public function save(Request $request)
    {
        $request->validate([
            'about_name' => 'required|unique:additionaldata,additionaldata_name|max:20',
            'about_description' => 'required|max:200',
        ]);
        $about = new About();
        $about->additionaldata_name = $request->about_name;
        $about->additionaldata_description = $request->about_description;
        $about->save();
        return redirect()->back()->with('success', 'About Details created successfully.');
    }

    public function list()
    {
        $allRecords = About::all();
        return $allRecords;
    }
}
