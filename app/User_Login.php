<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Login extends Model
{

    public $table = 'user_logins';


    protected $fillable = [
        'user_id','last_sign_in_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User'); 
    }
}
