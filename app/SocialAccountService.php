<?php 
namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\SocialAccount;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
        	$user = \Sentinel::findById($account->user->id);

            return $user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $credentials = [
    			'login' => $providerUser->getEmail(),
			];

			$user = \Sentinel::findByCredentials($credentials);

            if (!$user) {

            	$confidential = [
            		'email'			=> $providerUser->getEmail(),
            		'first_name'	=> $providerUser->getName(),
            		'password'		=> "wertwerwerwer"
            	];

                $user = \Sentinel::registerAndActivate($confidential);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}


 ?>