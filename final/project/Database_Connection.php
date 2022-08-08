<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select MySql Database</title>
</head>
<body>
   <?php 
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(!$conn)
    {
        die('Cant connect: ' . mysqli_error($conn));
    }
   // echo 'Connected Succesfully';
    
    // connection.
    
    $db = mysqli_select_db($conn,'solo');
    
    if(!$db)
    {
        echo ' Database selection has error';
    }
    else
      //  echo 'DB Selected';
    
    
    
    ?>
    
</body>
</html>