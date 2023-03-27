<?php


 require_once "db_connect.php";
 
 $id= $_GET["id"];
 
 
 $sql = "SELECT * FROM library WHERE id = $id " ;

 $result = mysqli_query($connect, $sql);
 
 $row = mysqli_fetch_assoc($result);

 if(isset($_POST["submit"])) {
   
    $title =mysqli_real_escape_string($connect,$_POST["title"]);
    $author_first_name =mysqli_real_escape_string($connect,$_POST["author_first_name"]);
    $author_last_name = mysqli_real_escape_string($connect,$_POST["author_last_name"]);
    $image = mysqli_real_escape_string($connect,$_POST["image"]);
    $ISBN = mysqli_real_escape_string($connect,$_POST["ISBN"]);
    $short_description = mysqli_real_escape_string($connect,$_POST["description"]);
    $type = mysqli_real_escape_string($connect,$_POST["type"]);
    $publisher_name = mysqli_real_escape_string($connect,$_POST["publisher_name"]);
    $publisher_address = mysqli_real_escape_string($connect,$_POST["publisher_address"]);
    $publish_date = mysqli_real_escape_string($connect,$_POST["publish_date"]);
    $status = mysqli_real_escape_string($connect,$_POST["status"]);;
   
    
    

    $sql2 = "UPDATE `library` SET `title`='$title',`image`='$image',`ISBN`='$ISBN',`short_description`='$short_description',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',`publish_date`='$publish_date',`status`='$status' WHERE id = $id";
   
    
    if(mysqli_query($connect, $sql2)) {
        header("Location: index.php");
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
            <input type="text" placeholder="title of product" class="form-control" name="title" value="<?=$row["title"] ?>">
            <input type="text" placeholder="author first name" class="form-control" name="author_first_name" value="<?=$row["author_first_name"] ?>">
            <input type="text" placeholder="author second name" class="form-control" name="author_last_name" value="<?=$row["author_last_name"] ?>">
            <input type="text" placeholder="pictures url" class="form-control" name="image" value="<?=$row["image"] ?>">
            <input type="text" placeholder="ISBN nummer" class="form-control" name="ISBN" value="<?=$row["ISBN"] ?>">
            <input type="text" placeholder="shor description" class="form-control" name="short_description" value="<?=$row["short_description"] ?>">
            <input type="text" placeholder="Book, CD or DVD" class="form-control" name="type" value="<?=$row["type"] ?>">
            <input type="text" placeholder="publisher name" class="form-control" name="publisher_name" value="<?=$row["publisher_name"] ?>">
            <input type="text" placeholder="publisher address" class="form-control" name="publisher_address" value="<?=$row["publisher_address"] ?>">
            <input type="text" placeholder="publishing date" class="form-control" name="publish_date" value="<?=$row["publish_date"] ?>">
            <input type="text" placeholder="status: available or reserved" class="form-control" name="status" value="<?=$row["status"] ?>">

            <input type="submit" name="submit" value="Edit" class="btn btn-success">
            <a href="index.php" class="btn btn-success">Back to the Home Page</a>
        </form>
    </div>
    
</body>
</html>