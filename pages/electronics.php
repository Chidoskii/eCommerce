<?php
  require_once("../php/config.php");
  require_once("../php/functions.php");
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
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="../css/tablet.css">
    <link rel="shortcut icon" href="../../../imgs/erowdy.ico" />
</head>
<body>
<nav class="navbar fixed-top bg-body-tertiary rowdy-nav">
  <div class="container-fluid topnav">
    <a class="navbar-brand" href="../index.php">
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
      <div class="loc-img"><img class="loc-ping" src="../imgs/location_pin.png" alt="..." /></div>
        <div class="user-addy-details">
          <div class="del-to-user">Deliver to <?= $_SESSION["get_user"]["first_name"]?></div>
          <div class="user-city-zip"><?= $_SESSION["get_user"]["city"]?> <?= $_SESSION["get_user"]["zip"]?></div>
        </div>
    </div>
    <form class="d-flex nav-serch-form" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="user-acnt-opts">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle account-opts" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hello, <?= $_SESSION["get_user"]["first_name"]?> <br>
          Account & Orders
        </button>
        <ul class="dropdown-menu topnav-drop-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item logout-link" href="../php/logout.php">
            LOG OUT
          </a></li>
        </ul>
    </div>
    </div>
    <a class="shop-cart-opts" href="./cart.php">
      <img class="cart-png" src="../imgs/shop.png" alt="..." />
      <div class="shopping-text">Shopping Cart</div>
    </a>
  </div>

  <div class="subnav container-fluid">
    <button class="btn btn-primary modal-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      All
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
      <img src="../imgs/erowdy.png" class="d-block erowdy-runner" alt="...">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Hello, <?= $_SESSION["get_user"]["first_name"]?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
          Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
        <div class="dropdown mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Departments
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./automotives.php">Automotive</a></li>
            <li><a class="dropdown-item" href="./arts-crafts.php">Arts & Crafts</a></li>
            <li><a class="dropdown-item" href="./clothing.php">Clothing</a></li>
            <li><a class="dropdown-item" href="./electronics.php">Electronics</a></li>
            <li><a class="dropdown-item" href="./gardenOutdoors.php">Garden & Outdoors</a></li>
            <li><a class="dropdown-item" href="./homeKitchen.php">Home & Kitchen</a></li>
            <li><a class="dropdown-item" href="./office.php">Office Supplies</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="category-links"><a href="./clothing.php">Clothing</a></div>
    <div class="category-links"><a href="./automotives.php">Automotives</a></div>
    <div class="category-links"><a href="./electronics.php">Electronics</a></div>
    <div class="category-links"><a href="./homeKitchen.php">Home & Kitchen</a></div>
    <div class="category-links"><a href="./office.php">Office Supplies</a></div>
    <div class="category-links"><a href="./gardenOutdoors.php">Garden & Outdoors</a></div>
  </div>
</nav>
<div class="page-contents">

<h2 class="dpt-header">Electronics</h2>
<?php
  $db = get_mysqli_connection();
  $query = false;

  $category = 'Electronics';
  $query = $db->prepare("select * from Products where category = ?");
  
  if (!$query) {
    echo "uh oh";
  }

  $result = filter_category($category, $db);

  echo "<div class='bigger-can container-md'>";

  while ($row = $result->fetch_assoc()) {
    $id = $row['pID'];
    $image = $row['img'];
    $desc = $row["prod_desc"];
    $price = $row["price"];

    $card = <<<TEXT
    <div class="big-can">
    <div class="kitchen-prod-img"><img class="" src="$image" alt="..." /></div>
    <div class="prod-desc-can">
    <div class="id-can">
    <div class="num-name">ID #:
    <div id="$id">$id</div></div>
    <div class="kitchen-prod-desc"> $desc</div>
    </div>
    </div>
    <div class="kitchen-prod-price">Price: $ <div id="item-price">$price</div>.00</div>
    </div>
    TEXT;

    echo $card;
  };
?>
</div>
</div>

<?php
  require_once("../components/footer.php");
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>



