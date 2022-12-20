<?php 
    $server_name= 'localhost';
    $user_name= 'root' ;
    $password= '';
    $db_name='codewith_haryy';
    $conn= mysql_connect($server_name, $user_name, $password);
    mysql_select_db($db_name);
    if (!$conn) {
        die("Error" . mysql_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>