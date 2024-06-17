<?php
    include_once("./connect.php");
    
    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$nama', '$isbn', '$unit'
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>FORM TAMBAH BUKU</title>
</head>
<body>
    <div class="container w-75">
        <header>
            <h1 class="my-4">Form Tambah Data Buku</h1>
        </header> 
    
        <form class="w-75" method="POST" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input required name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ISBN</label>
                <input required name="isbn" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Unit</label>
                <input required name="unit" type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <a class="btn btn-secondary" href="./buku.php" type="button">Kembali ke halaman buku</a>
        
    </div>

</body>
</html>