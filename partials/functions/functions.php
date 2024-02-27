<?php

function passwordGenerator( $passwordLength ){
    $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    for ($i=0; $i < $passwordLength ; $i++) {
        $randCharIndex = rand(0, strlen($char) - 1);
        $password .=  substr($char, $randCharIndex, 1);
    }
    return $password;
}