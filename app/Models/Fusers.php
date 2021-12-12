<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User_Friend;
use App\Models\User_Post;

class Fusers extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    
    public function user_post(){
        return $this->hasMany(User_Post::class, 'fuserId', 'id');
    }

    public function user_friend(){
        return $this->hasMany(User_Friend::class, 'sourceId', 'id');
    }

    public function friend_user(){
        return $this->hasMany(User_Friend::class, 'targetId', 'id');
    }

}
