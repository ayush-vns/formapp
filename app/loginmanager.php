<?php

namespace App;

class LoginManager {
    public static function isUserNameAndPasswordCorrect($username, $password) {
        $ser = signup::where('username', $username)->where('password', $password)->first();

        if ($ser == null ) {
            return false;
        }

        return true;
    }
}

