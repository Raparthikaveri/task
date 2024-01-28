<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ball; 

class BallController extends Controller
{
    public function addBall()
    {
        return view('ballform');
    }
    public function saveBall(Request $request){
        $ball = New Ball();
        $ball->name = $request->name;
        $ball->volume =  $request->volume;
        $ball->save();
        return redirect()->route('ball.add')->with('msg','New Ball Added successfully');
    }
}
