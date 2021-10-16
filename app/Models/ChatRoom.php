<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    //a chat room has many messages
    public function messages(){
        return $this->hasMany('App\Models\ChatMessage');
    }
}
