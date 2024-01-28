<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bucket; 

class BucketController extends Controller
{
    public function addBucket(){
        return view('bucketform');
    }
    public function saveBucket(Request $request){
        $bucket = New Bucket();
        $bucket->name = $request->name;
        $bucket->volume =  $request->volume;
        $bucket->save();
        return redirect()->route('bucket.add')->with('msg','New Bucket Added successfully');
    }
}
