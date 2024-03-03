<?php
require_once("config.php");

if(empty($_SESSION["logged_in"])){
    header("location: login.php");
}

if($_SESSION["logged_in"] == false){
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $PROJECT_NAME ?></title>
    <link rel="stylesheet" href="">
    <style>
</style>
</head>
<body>
<h1><?= $PROJECT_NAME?></h1>

<a class="logout" href="logout.php"><button class="sub">LOG OUT</button></a>
<h2>Welcome back!</h2>
<?php
      if(isset($_SESSION["is_emp"]) && ($_SESSION["is_emp"])){
        require_once("vendor.php");
      }
      else{
        require_once("user.php");
      }
    ?>



