<?php

function passwordGenerator( $passwordLength, $repeat ){
    $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    if($repeat == 'true'){
        for ($i=0; $i < $passwordLength ; $i++) {
            $randCharIndex = rand(0, strlen($char) - 1);
            $password .= substr($char, $randCharIndex, 1);
        }
    }else{
        $i = 0;
        while ($i < $passwordLength) {
            $randCharIndex = rand(0, strlen($char) - 1);
            if(!str_contains($password, $char[$randCharIndex])){
                $password .= substr($char, $randCharIndex, 1);
                $i++;
            }
        }
    }
    return $password;
}