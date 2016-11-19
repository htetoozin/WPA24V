<?php 
namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $credentials = [
    			'login' => $providerUser->getEmail(),
			];

			$user = Sentinel::findByCredentials($credentials);

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