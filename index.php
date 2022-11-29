<?php


if (isset($_GET['size'])) {

    $size = $_GET['size'];

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

    $password = getRandomPassword($size);

    echo $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="index.php" method="get">
        <label for="size">Lunghezza Password: </label>
        <input name="size" id="size" type="number">
        <button type="submit">Invia</button>
        <button type="reset">Resetta</button>
    </form>
</body>

</html>