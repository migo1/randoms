<?php

namespace App\Listeners;


use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User_Login;

class UpdateLastSignInAt
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {

        User_Login::create([
       //  $logins =  $event->user->user_logins->last_sign_in_at ,
       //  $log = Carbon::now(),
       //  $logins = $log,

        //  $logins =  $event->user_logins->last_sign_in_at = Carbon::now(),
            'user_id'       =>  $event->user->id,
            'last_sign_in_at'    =>  $event->user->user_logins->last_sign_in_at = Carbon::now(),
        ]);
    }
}
