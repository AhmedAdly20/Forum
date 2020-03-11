<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Channel;
use App\User;


class Discussion extends Model
{
    protected $fillable = ['title','content','user_id','channel_id','slug'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function channel(){
        return $this->belongsTo(Channel::class);
    }

}
