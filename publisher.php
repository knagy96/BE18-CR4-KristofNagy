<?php
    require_once 'db_connect.php';

    $sql ="SELECT * FROM library";

    $result = mysqli_query($connect, $sql);

    $body = "";
    
    $nOR = mysqli_num_rows($result);

    if($nOR == 0) {
        $body = "No results";
    } else {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($rows as $row) {
            $body .= '
            <tbody>
              <tr>
                <td>'.$row["publisher_name"]. '</td>
                
                
                </tr>
          ';
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="container text-center mb-4">
    <table class="table">
        <thead>
          <tr>
              
            <th scope="col">Publisher Name</th>
            
          </tr>
        </thead>
    <?= $body ?>
    </tbody>
        </table>
      
        <a class="btn btn-success" href="index.php">Go back</a>
    </div>
</body>
</html>