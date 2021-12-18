<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Fusers;
use App\Http\Controllers\FusersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




//Route::post('/login','App\Http\Controllers\FusersController@login');
//Route::resource('fuser', 'App\Http\Controllers\FusersController');
//Route::resource('post', 'App\Http\Controllers\User_PostController');
//Route::resource('friends', 'App\Http\Controllers\User_FriendController');
//Route::get('/UserPost/{id}','App\Http\Controllers\User_PostController@getUserPost');

Route::prefix('fuser')->group(function(){
    //Route::get('/',[\App\Http\Controllers\FusersController::class, 'login']);
    Route::get('/',[\App\Http\Controllers\FusersController::class, 'showall']);
});

Route::prefix('posts')->group(function(){
    Route::get('/{id}',[\App\Http\Controllers\User_PostController::class, 'getUserPost']);
    Route::get('/{id}',[\App\Http\Controllers\User_PostController::class, 'getTimelinePost']);
    Route::get('/',[\App\Http\Controllers\User_PostController::class, 'showall']);
});

Route::prefix('friend')->group(function(){
    Route::get('/{id}',[\App\Http\Controllers\User_FriendController::class, 'getUserFriend']);
    Route::get('/',[\App\Http\Controllers\User_FriendController::class, 'showall']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
