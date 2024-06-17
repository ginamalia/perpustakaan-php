<?php
    include_once("./connect.php");
    $query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Staff</title>
</head>
<body>
    <div class="container w-75">
    <header>
            <h1 class="my-4">Daftar Staff</h1>
        </header>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">NAMA</th>
                <th scope="col">TELEPON</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $buku) { ?>
                    <tr>
                        <td><?php echo $buku["nama"] ?></td>
                        <td><?php echo $buku["telp"] ?></td>
                        <td><?php echo $buku["email"] ?></td>
                        <td>
                            <a href=<?php echo "edit-staff.php?id=" . $buku["id"] ?>>EDIT</a>
                            <a href=<?php echo "delete-staff.php?id=" . $buku["id"] ?>>HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
                    
        <br>
        <a class="btn btn-secondary" href="./tambah-staff.php" type="button">Tambah data staff</a>
        <a class="btn btn-secondary" href="./index.php" type="button">Kembali ke halaman utama</a>
        
    </div>

    
</body>
</html>