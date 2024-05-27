<?php
    include_once("./connect.php");
    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Buku</title>
</head>
<body>
    <div class="container w-75">
        <header>
            <h1 class="my-4">Daftar Buku</h1>
        </header>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">NAMA</th>
                <th scope="col">ISBN</th>
                <th scope="col">UNIT</th>
                <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $buku) { ?>
                    <tr>
                        <td><?php echo $buku["nama"] ?></td>
                        <td><?php echo $buku["isbn"] ?></td>
                        <td><?php echo $buku["unit"] ?></td>
                        <td>
                            <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a>
                            <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <br>
        <a href="./tambah-buku.php">Tambah data buku</a>
        <br>
        <a href="./index.php">Kembali ke halaman utama</a>
    </div>
    
</body>
</html>