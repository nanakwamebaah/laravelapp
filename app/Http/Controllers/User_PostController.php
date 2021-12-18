<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Fusers;
Use App\Models\User_Post;
Use App\Models\User_Friend;

class User_PostController extends Controller
{
   
    public function index()
    {
        return User_Post::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'fuserId'=>'required',
            'message'=>'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $user = User_Post::create(($validator->validated()));
        return response()->json([ 'message' =>'your post is uploaded', 'user'=>$user->fusers->username],201);
    }

    public function show($id)
    {
        return User_Post::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User_Post::find($id)->update($request->all()); 
        return $users;
    }

    public function destroy($id)
    {
        //
    }
    public function getUserPost($id){
        $posts = Fusers::find($id)->user_post;
        $arr = array();
        foreach ($posts as $post){
            array_push($arr,$post->message);
        }
        return $arr;

    }
    
    public function calLikes($post){
        //
    }
    public function getTimelinePost($id){
        $friends = Fusers::find($id)->user_friend;
        $arr = array();
        foreach ($friends as $friend){
            array_push($arr,$friend->targetId);
        }
        $posts = array();
        foreach ($arr as $user){
            array_push($posts,$this->getUserPost($user));
        }
        return $posts;
          
    }
    public function showall(){
       $post = DB::table('user__posts')->join('fusers', 'user__posts.fuserId', '=', 'fusers.id')->select('user__posts.*','fusers.username')->get();
       return $post;
    }
    
}
