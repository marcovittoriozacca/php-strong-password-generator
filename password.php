<?php
session_start();

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
        <?php if(isset( $_SESSION["password"] )): ?>
            <h2>Password generata correttamente!</h2>
            <h4>Copiala prima che venga persa per sempre!</h4>

            <!-- alert banner only visible if there's no password and somehow the user is in this page-->
        <?php else : ?>
            <div class="alert alert-danger my-max-w mt-5" role="alert">
                <h4>Sembra che tu non abbia inserito alcuna password!</h4>
                <h5>Clicca il pulsante per tornare indietro</h5>
                <form action="index.php">
                    <button class="btn btn-warning text-capitalize fw-bold my-3">Torna Indietro</button>
                </form>
            </div>
            
        <?php endif; ?>
    </header>
    <main>
        
        <!-- only visible if there is a password in the session -->
        <?php if(isset( $_SESSION["password"] )): ?>
            <div class="my-max-w bg-body-tertiary rounded-2 mt-3 p-3 overflow-auto">
                <?= $_SESSION["password"]; ?>
                <form action="index.php" class="float-end">
                    <button type="submit" class="btn btn-sm btn-secondary">Torna indietro</button>
                </form>
            </div>
        <?php endif; ?>

        <!-- clear and destroy the session -->
        <?php
            session_unset();
            session_destroy();
        ?>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>