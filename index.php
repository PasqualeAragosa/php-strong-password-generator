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
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .wrapper {
            width: 80%;
            margin: auto;
            /* background-color: blue; */
        }


        .content {
            width: 500px;
            margin: auto;
            /* background-color: red; */
        }
    </style>
</head>

<body>

    <div class="wrapper text-center mt-5">
        <header>
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </header>
        <main>
            <div class="content mt-4">
                <form action="index.php" method="get">
                    <label for="size">Lunghezza Password: </label>
                    <input name="size" id="size" type="number">
                    <button type="submit">Invia</button>
                    <button type="reset">Resetta</button>
                </form>

                <p class="text-start">Password: <?php echo $password; ?> </p>
            </div>
            <!-- /.content -->
        </main>
    </div>
    <!-- /.wrapper -->

</body>

</html>