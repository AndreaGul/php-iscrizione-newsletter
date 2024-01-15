<?php
session_start();

$email= $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Welcome</h1>
  <h2><?php echo $email ?></h2>
  
</body>
</html>