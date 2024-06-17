<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <div class="container">
        <center>
            <h1 class="my-4">Aplikasi Perpustakaan</h1>
        </center>
        

        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-primary" href="./buku.php" type="button">Lihat Daftar Buku</a>
            <a class="btn btn-primary" href="./staff.php" type="button">Lihat Daftar Staff</a>

            <form class="mt-10" action="logout_proccess.php" method="POST">
                <button class="btn btn-danger d-grid gap-2 col-6 mx-auto" type="submit">LOGOUT</button>
            </form>
         </div>

    </div>

    
</body>
</html>