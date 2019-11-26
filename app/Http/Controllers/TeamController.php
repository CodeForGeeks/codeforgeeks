<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class TeamController extends AdminController
{
    public function __construct()
    {
        // parent::__construct();
        parent::addVisit();
    }
    public function index()
    {
        return view("admin.crud.team.index");
    }


    public function save(Request $request)
    {
        $request->validate([
            'team_name' => 'required|unique:team,team_name|max:20',
            'team_position' => 'required|max:200',
            'team_image' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $originalImage = $request->file('team_image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path() . '/thumbnail/';
        $originalPath = public_path() . '/images/';
        $time = time();
        $imageName= $time . $originalImage->getClientOriginalName();

        $OriginalImageName = $originalPath . $time . $originalImage->getClientOriginalName();
        $thumbnailImage->save($OriginalImageName);

        $thumbnailImage->resize(150, 150);
        $ThumbnailImageName = $thumbnailPath . $time . $originalImage->getClientOriginalName();
        $thumbnailImage->save($ThumbnailImageName);

        $team = new Team();
        $team->team_name = $request->team_name;
        $team->team_position = $request->team_position;
        $team->team_image = $imageName;
        $team->save();

        return redirect()->back()->with('success', 'Team member added successfully.');
    }

    public function list()
    {
        $allRecords = Team::all();
        return $allRecords;
    }
}
