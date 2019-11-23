<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::all();
        return view("admin.crud.blog_category.index")->with(compact('categories'));
    }


    public function save(Request $request)
    {
        $request->validate([
            'blog_category_name' => 'required|unique:blog_category,blog_category_name|max:20',
        ]);


        $testimonial = new BlogCategory();
        $testimonial->blog_category_name = $request->blog_category_name;
        if($request->blog_category_parent == "")
        {
            $testimonial->blog_category_parent = null;
        }
        else{
            $testimonial->blog_category_parent = $request->blog_category_parent;
        }
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonials added successfully.');
    }

    public function list()
    {
        $allRecords = BlogCategory::all();
        return $allRecords;
    }
}
