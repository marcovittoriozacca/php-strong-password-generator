<?php

function passwordGenerator( $passwordLength, $repeatbool, $letterbool, $numberbool, $specialcharbool ){
   $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $numbers = '0123456789';
   $specialchar = '!"#$%&()*+,-./:;<=>?@[\]^_`{|}~';
   $char;

    //based on the boolean values of letters, number and special characters, the variable $char will be filled with the proper values
   if($letterbool && $numberbool && $specialcharbool){
    $char = $letters . $numbers . $specialchar;
   }else{
       if($letterbool){
            $char .= $letters;
       }
       if($numberbool){
            if((!$letterbool && !$specialcharbool) && ($passwordLength > strlen($numbers))){
                $passwordLength = strlen($numbers);
                $char .= $numbers;
            }else{
                $char .= $numbers;
            }
       }
       if($specialcharbool){
            $char .= $specialchar;
       }
   }
   $char = trim($char);

    $password = '';
    if($repeatbool == 'true'){
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