<?php


function getRandomPassword($size, $choise)
{
    for ($i = 0; $i < $choise; $i++) {
    }

    $numbers = '0123456789';
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $allCharacters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#!$%&?';
    $randomCharacters = '';


    for ($i = 0; $i < $size; $i++) {
        $char = mt_rand(0, strlen($allCharacters) - 1);
        $randomCharacters .= $allCharacters[$char];
    }

    return $randomCharacters;
}
