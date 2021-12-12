<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fusers;

class User_Post extends Model
{
    use HasFactory;
    protected $table = 'user__posts';
    
    protected $fillable = [
        'fuserId',
        'message',
        'image',
        'like_count',
        'dislike_count',
        'share_count',    
    ];

    public function fusers(){
        return $this->belongsTo('App\Models\Fusers','fuserId', 'id');
    }
}
