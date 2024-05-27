<?php
    session_start();
    if (isset($_SESSION['email'])) {
        header("Location: index.php");
        exit;
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container w-75">
        <header>
            <h1 class="my-4">Register</h1>
        </header>    
    
        <form class="w-75" method="POST" action="./register_proccess.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="submit" type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>      
</body>
</html>