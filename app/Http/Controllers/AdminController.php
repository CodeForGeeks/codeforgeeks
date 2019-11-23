<?php

namespace App\Http\Controllers;

use App\Analytics;
use Request;
use App\Location;

class AdminController extends Controller
{
    //
    public function __construct()
    { }

    protected function addVisit()
    {
        $this->add();
    }

    private function add()
    {
        // dd(\Location::get(Request::ip()));
        $ip = $this->getUserIpAddr();
        $analytics = Analytics::where('analytics_ipaddress', $ip)->first();
        if ($analytics) {
            $analytics->analytics_location = $analytics->analytics_location + 1;
            $analytics->save();
        } else {
            $analytics = new Analytics();
            $analytics->analytics_ipaddress = \Request::ip();
            $analytics->analytics_location = 1;
            $analytics->save();
        }
    }
    private function getUserIpAddr()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
