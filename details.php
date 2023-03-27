<?php

require_once "db_connect.php";

$id=$_GET["id"];

 $sql = "SELECT * FROM library WHERE id = $id";

$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mb-3 shadow">
            <img src="<?= $row["image"]?>" class="card-img-top" alt="pic" style="width:100%; height:50vh">
                <div class="card-body">
                    <h5 class="card-title"><?= $row["title"]?></h5>
                    <p class="card-text">Author: <br> <b> <?= $row["author_first_name"]?> <?= $row["author_last_name"]?></b></p>
                    <p class="card-text">Short description: <br> <?= $row["short_description"]?></p>
                    <p class="card-text">Type: <b><?= $row["type"]?></b></p>
                    <p class="card-text">Publisher: <?= $row["publisher_name"]?> <?= $row["publisher_address"]?></p>
                    <p class="card-text text-decoration-underline" >Status: <b> <?= $row["status"]?></b></p>
                </div>
        </div>
        <a href="index.php" class="btn btn-success">Back to the Home Page</a>
    </div>
</body>
</html>