<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BucketController;
use App\Http\Controllers\BucketSuggestion;
use App\Http\Controllers\BallController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[BucketController::class ,'addBucket']);
Route::get('/bucket/add',[BucketController::class ,'addBucket'])->name('bucket.add');
Route::get('/ball/add',[BallController::class ,'addBall'])->name('ball.add');
Route::get('/bucket/suggestions',[BucketSuggestion::class ,'bucketSuggestions'])->name('bucket.suggestions');
Route::post('/bucket/save',[BucketController::class,'saveBucket'])->name('bucket.save');
Route::post('/ball/save',[BallController::class,'saveBall'])->name('ball.save');
Route::post('/results/get',[BucketSuggestion::class,'getResults'])->name('results.get');
