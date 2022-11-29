<?php


function getRandomPassword($size)
{

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#!$%&?';
    $randomCharacters = '';

    for ($i = 0; $i < $size; $i++) {
        $char = mt_rand(0, strlen($characters) - 1);
        $randomCharacters .= $characters[$char];
    }

    return $randomCharacters;
}
// if (isset($_GET['size'])) {

//     $size = $_GET['size'];

// }
