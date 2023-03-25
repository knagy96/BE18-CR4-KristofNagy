<?php
    require_once "db_connect.php";

    $sql = "SELECT * FROM library";

    $result = mysqli_query($connect, $sql);

    $layout = "";


    if(mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
        $layout .= "
            <tr>
                <td>{$row["id"]}</td>
                <td>{$row["title"]}</td>
                <td>{$row["author_first_name"]}  {$row["author_last_name"]}</td>
                <td>{$row["type"]}</td>
                <td><a href='details.php?id={$row["id"]}' class='btn btn-warning'>Show Details</a></td>
                <td><a href='update.php?id='{$row["id"]}' class='btn btn-success'>Edit</a></td>
                <td><a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a></td>
            
            </tr>

        
        ";
       }
        
    } else {
        $layout .="<tr><td colspan='6'>no result</td></tr>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Type</th>
                        <th scope="col">Details</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th> 
                    </tr>
                </thead>
                <tbody>
                    <?= $layout ?>
                </tbody>
           </table>
           <a href="create.php" class="btn btn-primary">Create Page</a>
        <div> 
</body>
</html>