<?php
class User{
    private $name;
    private $age;
    public static $minPassLength = 6;

    public static function validatePass($password){
        if (strlen($password) >= 6) {
            return true;

        } else{
            return false;
        }
    }
}

$password = 'hello1';

if (User::validatePass($password)) {
    echo 'Password valid';
} else {
    echo 'Password is NOT valid';
}

?>