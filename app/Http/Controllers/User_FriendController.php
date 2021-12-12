<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
Use App\Models\User_Friend;
Use App\Models\Fusers;

class User_FriendController extends Controller
{

    public function index()
    {
        return User_Friend::all();
    }

   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'sourceId' => 'required|integer',
            'targetId' => 'required|integer',
            'type'    => 'required|string'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $friend = User_Friend::create(($validator->validated()));
        return response()->json([ 'message' =>'success', 'Friend'=>$friend],201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function OnlineFriend($id){
        //
    }

    public function getUserFriend($id){
        $friends = Fusers::find($id)->user_friend;
        if(count($friends) == 0){
            $friends = Fusers::find($id)->friend_user;
            $arr = array();
            foreach($friends as $friend){
                array_push($arr,$friend->sourceId);
            }
            $user = array();
            foreach($arr as $id){
                array_push($user,Fusers::find($id)->username);
            }
            return $user;
        }else{
            $arr = array();
            foreach($friends as $friend){
                array_push($arr,$friend->targetId);
            }
            //return $friends;
            $user = array();
            foreach($arr as $id){
                array_push($user,Fusers::find($id)->username);
            }
            return $user;
        }
        
    }
}
