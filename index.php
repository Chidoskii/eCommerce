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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<nav class="navbar fixed-top bg-body-tertiary rowdy-nav">
  <div class="container-fluid topnav">
    <a class="navbar-brand" href="#">
      <span class="brand-letter-e">e</span>
      <span class="brand-letter-r">R</span>
      <span class="brand-letter-o">o</span>
      <span class="brand-letter-w">w</span>
      <span class="brand-letter-d">d</span>
      <span class="brand-letter-y">y</span>
    </a>
    <div class="delivery-addy">
      <div class="loc-img"><img class="loc-ping" src="./imgs/location_pin.png" alt="..." /></div>
      <div class="user-addy-details">
        <div class="del-to-user">Deliver to XXXX</div>
        <div class="user-city-zip">Bakersfield 93313</div>
      </div>
    </div>
    <form class="d-flex nav-serch-form" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="user-acnt-opts">
      <div class="user-greet">Hello, XXXX</div>
      <div class="account-options">Account & Orders</div>
    </div>
    <a class="shop-cart-opts" href="#">
      <img class="cart-png" src="./imgs/shop.png" alt="..." />
      <div class="shopping-text">Shopping Cart</div>
</a>
  </div>
  <div class="subnav container-fluid">
  <button class="btn btn-primary modal-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  All
</button>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Hello, XXXXX</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
  </div>
</nav>
<div class="page-contents">
<h1><?= $PROJECT_NAME?></h1>


<?php
      if(isset($_SESSION["is_emp"]) && ($_SESSION["is_emp"])){
        require_once("./pages/vendor.php");
      }
      else{
        require_once("./pages/user.php");
      }
    ?>


<a class="logout-btn" href="./php/logout.php"><button class="sub">LOG OUT</button></a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>



