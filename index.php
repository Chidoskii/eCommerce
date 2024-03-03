<?php
require_once("./php/config.php");

if(empty($_SESSION["logged_in"])){
    header("location: ./pages/login.php");
}

if($_SESSION["logged_in"] == false){
    header("location: ./pages/login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $PROJECT_NAME ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="">
    <style>
</style>
</head>
<body>
<h1><?= $PROJECT_NAME?></h1>

<a class="logout" href="./php/logout.php"><button class="sub">LOG OUT</button></a>
<h2>Welcome back!</h2>
<?php
      if(isset($_SESSION["is_emp"]) && ($_SESSION["is_emp"])){
        require_once("./pages/vendor.php");
      }
      else{
        require_once("./pages/user.php");
      }
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>



