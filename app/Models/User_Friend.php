<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Friend extends Model
{
    use HasFactory;
    protected $table = 'user__friends';

    protected $fillable = [
        'sourceId',
        'targetId',
        'type',
    ];

    public function fusers(){
        return $this->belongsTo(Fusers::class, 'sourceId', 'id');
    }
}
