<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class DashboardController extends AdminController
{
    //
    public function __construct()
    {
        // parent::__construct();
        parent::addVisit();
    }
    public function index()
    {
        return view("admin.index");
    }
}
