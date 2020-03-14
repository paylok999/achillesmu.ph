<?php

namespace App;

use Carbon\Carbon; use Illuminate\Auth\GenericUser; use Illuminate\Contracts\Auth\Authenticatable; use Illuminate\Contracts\Auth\UserProvider;

class AuthApiProvider implements UserProvider 
{
	public $host = 'http://139.99.124.123:8080/achillesmu/public/api/account/byusername/';

	public function retrieveById($identifier)
	{	
		

		$authme = new AuthApiUser;
		
		try{
			$url = $this->host . $identifier;
			$finduser = file_get_contents($url);
			$res = json_decode($finduser);
			$authme->memb_guid = $res->memb_guid;
			$authme->memb___id = $res->memb___id;
			$authme->memb__pwd = $res->memb__pwd;
			$authme->mail_addr = $res->mail_addr;

		}catch(\Exception $ce){
			throw new \Exception('Error logging you in. No user found.');
		}

		return $authme;
	}

	public function retrieveByToken($identifier, $token)
	{
		echo 'test1';
	}

	public function updateRememberToken(Authenticatable $user, $token)
	{

	}

	public function retrieveByCredentials(array $credentials)
	{
		$auth = new AuthApiUser;


		try{
			$url = $this->host . $credentials['username'];
			$finduser = file_get_contents($url);
			$res = json_decode($finduser);
			$auth->memb_guid = $res->memb_guid;
			$auth->memb___id = $res->memb___id;
			$auth->memb__pwd = $res->memb__pwd;
			$auth->addr_info = $res->addr_info;
			$auth->bloc_code = $res->bloc_code;


		}catch(\Exception $ce){
			throw new \Exception('Username Not Found. Please Try again.');
		}

		return $auth;
    
	}	

	public function validateCredentials(Authenticatable $user, array $credentials)
	{

		if($user->memb__pwd != $credentials['password'])
		{
			throw new \Exception('Incorrect Password. Please try again');
		}else if($user->bloc_code == 1){
			throw new \Exception('Account Block. Please contact Support.');
			
		}else{
			return true;
		}

	}
}