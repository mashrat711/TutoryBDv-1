<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\User;

class AmazonController extends Controller
{
    public function index()
    {
        return Socialite::driver('amazon')->redirect();
    }

    public function callback(User $user)
    {
        $user = Socialite::driver('amazon')->user();

        // dd($user);

        if(User::where('email', '=', $user->email)->first()){
	    $checkUser = User::where('email', '=', $user->email)->first();
	    Auth::login($checkUser);
	    return redirect('/');
	     } 

	    

        
    }
}
