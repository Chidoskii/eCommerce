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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="../../imgs/erowdy.ico" />
</head>
<body>
<nav class="navbar fixed-top bg-body-tertiary rowdy-nav">
  <div class="container-fluid topnav">
    <a class="navbar-brand" href="#">
      <div class="logo-group">
      <span class="brand-letter-e">e</span>
      <span class="brand-letter-r">R</span>
      <span class="brand-letter-o">o</span>
      <span class="brand-letter-w">w</span>
      <span class="brand-letter-d">d</span>
      <span class="brand-letter-y">y</span>
      </div>
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
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle account-opts" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hello, XXXX <br>
          Account & Orders
        </button>
        <ul class="dropdown-menu topnav-drop-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item logout-link" href="./php/logout.php">
            LOG OUT
          </a></li>
        </ul>
    </div>
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
      <img src="./imgs/erowdy.png" class="d-block erowdy-runner" alt="...">
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
    <div class="category-links">Clothing</div>
    <div class="category-links">Automotives</div>
    <div class="category-links">Electronics</div>
    <div class="category-links"><a href="./pages/homeKitchen.php">Home & Kitchen</a></div>
    <div class="category-links">Office Supplies</div>
    <div class="category-links">Garden & Outdoors</div>
  </div>
</nav>
<div class="page-contents">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-theme="dark" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item ci-1 active" data-bs-interval="5000">
      <img src="./imgs/gadgets.jpg" class="d-block w-100 carousel-item-pic" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item ci-2" data-bs-interval="5000">
      <img src="./imgs/sneaks.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item ci-3" data-bs-interval="5000">
      <img src="./imgs/brands.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container-fluid">

<?php
  require_once("./components/displayProducts.php");
?>

</div>
</div>

<?php
  require_once("./components/footer.php");
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>



