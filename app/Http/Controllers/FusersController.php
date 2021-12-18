<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use App\Models\Fusers;
Use App\Models\User_Post;
use Illuminate\Support\Facades\Hash;

class FusersController extends Controller
{
    
    public function index()
    {
        return Fusers::all();
    }

    //create fuser
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(),[
           'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:fusers',
            'email' => 'required|email|unique:fusers',
            'password' => 'required|string|confirmed|min:4'
       ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $user = Fusers::create(($validator->validated()));
        
        return response()->json([ 'message' =>'User successsfully registered', 'user'=>$user],201);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
             'email' => 'required|email',
             'password' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),422);
        }   
        
        $credentials = $request->only('email','password');
        $email = DB::table('fusers')->where(['email' => $credentials['email']])->value('email');
        if($email != null){
            $pass2 = $credentials['password'];
            $password = DB::table('fusers')->where(['email' => $credentials['email']])->value('password');
            $id = DB::table('fusers')->where(['email' => $credentials['email']])->value('id');
            if (Hash::check($pass2, $password,[])){
                //$user = Fusers::find($id)->update('active'=>);
                return response()->json(['message'=>'Login Succesfull'], 201);
            }else{
                return response()->json(['message'=>'Invalid password']);
            }
          
        }return response()->json(['message'=>'Invalid email']);
        
    }
    
    public function show($id)
    {
        return Fusers::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = Fusers::find($id)->update($request->all()); 
        return $users;
    }

    public function destroy($id)
    {
        //
        return Fusers::destroy($id);
    }

    public function logout($id){

    }
    
   public function showall(){
       $user = DB::table('fusers')->select('username')->get();
       return $user;
   }

}