<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ball; 
use App\Models\Bucket; 
 
class BucketSuggestion extends Controller
{
    public function bucketSuggestions(){
        $balls = Ball::all();
        return view('bucketsuggestions',compact('balls'));
    }

    public function getResults(Request $request){
        $information = $request->information;
        $buckets_res = Bucket::all();
        if($buckets_res){
            $bucket_values = array();
            foreach($buckets_res as $bucket){
                $bucket_name = $bucket->name;
                $bucket_values[$bucket_name] = $bucket->volume;
            }
            return response()->json(['success' => $bucket_values]);
        }else{
            return response()->json(['fail' => 'Please Add Buckets']);
        }
    }
}
