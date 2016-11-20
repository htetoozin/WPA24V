<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialAccountService;

class SocialAuthController extends Controller
{
    //
    public function redirect()
    {
        return \Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        // when facebook call us a with token
     
        $user = $service->createOrGetUser(\Socialite::driver('facebook')->user());

		$user = \Sentinel::authenticate($user);        

        return redirect()->to('/backend');
    }
}
