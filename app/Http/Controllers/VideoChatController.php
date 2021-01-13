<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zoom;
use Carbon\Carbon;

class VideoChatController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function joinMeeting(Request $request)
    {
        //dd(env('ZOOM_CLIENT_KEY'));
        //dd($request->role);
        $data['apiKey'] = env('ZOOM_CLIENT_KEY');
        $data['apiSecret'] = env('ZOOM_CLIENT_SECRET');
        $data['role'] = $request->role;
        //$data['meetingId'] = $this->initZoom();
        //$data['signature'] = $this->generate_signature($data['apiKey'], $data['apiSecret'], $data['meetingId'], $request->role);
        return view('join-meeting', $data);
    }

    public function initZoom()
    {
        $user = Zoom::user()->find('nazmul.sbpgc@gmail.com');
        $meetingInfo =  [
            "topic" => "Let's learn Laravel",
            "type" => 2, // Scheduled Meeting.
            // "start_time" => "2020-12-31T18:00:00",
            "start_time" => new Carbon('2021-01-13 24:20:00'),
            "duration" => "30", // 30 mins
            "password" => "123456"
        ];
        $meeting = Zoom::meeting()->make($meetingInfo);
        $user->meetings()->save($meeting);
        //dd($user->meetings()->all());
        return $user->meetings()->id;

    }
    public function getSignature()
    {
        dd($this->generate_signature ( "oTjkfigSTaymH-_oKVt70g", "Jef4BxNSIzPkQ4CfwW8s0bXzzhyD1Edj7IvX", "76321915895", 1));
    }

    public function meetingEnd()
    {
        dd("The meeting has been ended");
    }
}
