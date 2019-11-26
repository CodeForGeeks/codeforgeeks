<?php

namespace App\Http\Controllers;

use App\Analytics;
use Request;
use App\Location;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public $user_info;
    public function __construct()
    { }

    protected function addVisit()
    {
        $user_agent = \Request::header('User-Agent');
        $bname = 'Unknown';
        $platform = 'Unknown';

        if (preg_match('/linux/i', $user_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $user_agent)) {
            $platform = 'windows';
        }

        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $user_agent) && !preg_match('/Opera/i', $user_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $user_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $user_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $user_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $user_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $user_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }
        $this->add($platform , $bname);

    }

    private function add($platform , $bname)
    {
        $ip = $this->getUserIpAddr();
        $analytics = Analytics::where('analytics_ipaddress', $ip)->where('analytics_browser',$bname)->where('analytics_operating_system',$platform)->first();
        if ($analytics) {
            $analytics->analytics_userid = Auth::id();
            $analytics->analytics_ipaddress = $ip;
            $analytics->analytics_visits = $analytics->analytics_visits + 1;
            $analytics->analytics_browser = $bname;
            $analytics->analytics_operating_system = $platform;
            $analytics->save();
        } else {
            $analytics = new Analytics();
            $analytics->analytics_userid = Auth::id();
            $analytics->analytics_ipaddress = $this->user_info;
            $analytics->analytics_visits = 1;
            $analytics->analytics_browser = $bname;
            $analytics->analytics_operating_system = $platform;
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
