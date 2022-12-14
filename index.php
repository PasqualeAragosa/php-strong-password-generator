<?php

include __DIR__  . '/function.php';

if (isset($_GET['size'])) {
    $password = getRandomPassword($_GET['size'], $_GET['']);
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
            <div class="content mt-4 text-start">


                <form action="index.php" method="get">
                    <select class="form-select my-3">
                        <option selected>Tutti i caratteri</option>
                        <option value="ABCDEFGHIJKLMNOPQRSTUVWXYZ">Lettere maiuscole</option>
                        <option value="abcdefghijklmnopqrstuvwxyz">Lettere minuscole</option>
                        <option value="0123456789">Numeri</option>
                    </select>

                    <!-- SCELTA -->

                    <label for="size"><strong>Lunghezza Password</strong> </label>
                    <input name="size" id="size" type="number">
                    <!-- SIZE -->

                    <button type="submit">Invia</button>
                    <!-- INVIA -->

                </form>

                <?php if (isset($_GET['size'])) :
                    if ($_GET['size'] > 7 && $_GET['size'] < 17) : ?>
                        <p><strong>Password:</strong> <?= $password; ?></p>
                    <?php elseif ($_GET['size'] > 17) : ?>
                        <p class="text-danger">Lunghezza massima 16 caratteri</p>
                    <?php else : ?>
                        <p class="text-danger">Lunghezza minima 8 caratteri</p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <!-- /.content -->
        </main>
    </div>
    <!-- /.wrapper -->

</body>

</html>