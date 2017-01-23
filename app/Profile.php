<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
       'user_id', 'location', 'about', 'skills', 'profession', 'passion'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
