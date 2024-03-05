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
class alldatas {
    public static function showalldatas(){
        $da = signup::all();

        if (!$da) {
            throw new Exception('error');
        }

        $response["status"] = "ok";

        foreach ($da as $x) {
            echo "$x <br>";
          }
    }
}


