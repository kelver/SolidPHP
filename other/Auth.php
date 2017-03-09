<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 09/03/17
 * Time: 00:37
 */
class Auth
{
    public function authenticate($user, $pass)
    {
        if($user == 'kelver' and $pass == '123'){
            return true;
        }
        return false;
    }
}

class AuthApi extends Auth
{
    public function authenticate($user, $pass)
    {
        if($user == 'kelver' and $pass == '123'){
            return [
                'status' => 'ok'
            ];
        }
        return [
            'status' => 'fail'
        ];
    }
}

$auth1 = new Auth();
$auth2 = new AuthApi();

$auth1 = $auth1->authenticate('kelver', '1234');
$auth2 = $auth2->authenticate('kelver', '1234');

if($auth2){
    echo 'logado';
}else{
    echo 'n logado';
}