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

if(isset( $_GET['length'] ) && $_GET['length'] != '' ){
    $password = passwordGenerator( $_GET['length']);
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Strong Password</title>
    <style>
        .my-max-w{
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <header class="text-center py-3">
        <h1 class="text-secondary">Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
    </header>
    <main>
        <form action="index.php" method="GET" class="my-max-w p-3 bg-body-tertiary rounded-2">
            <div class="row align-items-center">
                <div class="col-6">
                    <label for="length" class="form-label">Lunghezza password:</label>
                </div>
                <div class="col-6">
                    <input type="number" min="1" class="form-control" name="length" id="length">
                </div>
                <div class="col-12">
                    <div class="mt-2">
                        <button type="submit" class="btn btn-secondary">Genera</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- only show the password if the variable $password is set and has a value -->
        <?php if(isset( $password )): ?>
            <div class="my-max-w bg-body-tertiary rounded-2 mt-3 p-3 overflow-auto ">
                <?= $password ?>
            </div>
        <?php endif; ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>