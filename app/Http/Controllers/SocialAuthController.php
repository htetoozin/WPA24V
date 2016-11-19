<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    //
    public function redirect()
    {
        return \Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        // when facebook call us a with token
        $providedUser = \Socialite::driver('facebook')->user();
        var_dump($providedUser);
    }
}
