<?php
/**
 * Created by PhpStorm.
 * User: beznisco
 * Date: 27.03.2017
 * Time: 8:49
 */
class SignUpData extends Page {

    static function generateNewName($length = 6) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $signUpName = '';
        for ($i = 0; $i < $length; $i++) {
            $signUpName .= $characters[rand(0, $charactersLength - 1)];
        }
        return $signUpName;
    }

    static function generateNewEmail($length = 4) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $signUpEmail = '';
        for ($i = 0; $i < $length; $i++) {
            $signUpEmail .= $characters[rand(0, $charactersLength - 1)].'@test.com';
        }
        return $signUpEmail;
    }

}