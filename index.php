<?php
session_start();
require_once __DIR__ . "/partials/functions/functions.php";

if(isset( $_GET['length'] ) && $_GET['length'] != '' ){
    $_SESSION['password'] = passwordGenerator( $_GET['length'], $_GET['repetition']);
    header("Location: password.php");
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
            <div class="row align-items-center row-gap-3">
                <div class="col-6">
                    <label for="length" class="form-label">Lunghezza password:</label>
                </div>
                <div class="col-6">
                    <input type="number" min="1" max="15" class="form-control" name="length" id="length">
                </div>
                <div class="col-6">
                    <label class="form-label">Consenti ripetizioni di uno o più caratteri:</label>
                </div>
                <div class="col-6">
                    <div>
                        <input checked type="radio" name="repetition" id="repetition-yes" value="true">
                        <label for="repetition-yes" class="form-label">Si</label>
                    </div>
                    <div>
                        <input type="radio" name="repetition" id="repetition-no" value="false">
                        <label for="repetition-no" class="form-label">No</label>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <button type="submit" class="btn btn-secondary">Genera</button>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>