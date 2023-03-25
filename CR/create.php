<?php
if(isset($_POST["submit"])) {
    require_once "db_connect.php";


    
    $title = $_POST["title"];
    $image = $_POST["image"];
    $ISBN = $_POST["ISBN"];
    $type = $_POST["type"];
    $short_description = $_POST["short_description"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $status = $_POST["status"];


    $sql = "INSERT INTO `library`(`title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ('$title', '$image', '$ISBN', '$type', '$short_description', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date', '$status')";

    if(mysqli_query($connect, $sql)) {
        header("Location: index.php");
    } else {
        echo "Pls contact the support";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container" >
        <h1>Create product</h1>
        <form method="POST"  class="form-group" enctype="multipart/form-data">
            <input type="text" placeholder="title of product" class="form-control" name="title">
            <input type="text" placeholder="author first name" class="form-control" name="author_first_name">
            <input type="text" placeholder="author second name" class="form-control" name="author_last_name">
            <input type="text" placeholder="pictures url" class="form-control" name="image" >
            <input type="text" placeholder="ISBN nummer" class="form-control" name="ISBN">
            <input type="text" placeholder="shor description" class="form-control" name="short_description">
            <input type="text" placeholder="Book, CD or DVD" class="form-control" name="type">
            <input type="text" placeholder="publisher name" class="form-control" name="publisher_name">
            <input type="text" placeholder="publisher address" class="form-control" name="publisher_address">
            <input type="text" placeholder="publishing date" class="form-control" name="publish_date">
            <input type="text" placeholder="status: available or reserved" class="form-control" name="status">

            <input type="submit" name="submit" value="Create product" class="btn btn-success">
            <a href="index.php" class="btn btn-success">Back to the Home Page</a>
        </form>
    </div>
    
</body>
</html>