<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;

class AuthApiUser implements Authenticatable {

	public $memb_guid;
	public $memb___id;
	public $memb__pwd;
	public $mail_addr;
	public $bloc_code;

	public function getAuthIdentifierName()
	{
		return $this->memb___id;
	}

    public function getAuthIdentifier()
    {
    	return $this->memb___id;
    }

    public function getAuthPassword()
    {
    	return $this->memb__pwd;
    }

    public function getRememberToken()
    {
    	//
    }

    public function setRememberToken($value)
    {
    	//
    }

    public function getRememberTokenName()
    {
    	//
    }


}
