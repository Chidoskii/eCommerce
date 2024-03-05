<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <?php
    function get_mysqli_connection() {
    static $connection;
    
    if (!isset($connection)) {
        $connection = mysqli_connect(
        ) or die(mysqli_connect_error());
    }
    if ($connection === false) {
        echo "Unable to connect to database<br/>";
        echo mysqli_connect_error();
    }
  
    return $connection;
}
    ?>
    <form method="post">
        <input type="submit" name="button1" value="Add To Cart" />
        <input type="submit" name="button2" value="Remove Cart" />
    </form>
    <?php
    session_start();

    // Initialize cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_POST['button1'])) {
        echo "<br>Added an item\n";
        addtoCart(1);
        cartCount();
        cartInfo();
    } elseif (isset($_POST['button2'])) {
        echo "<br>Deleted Cart\n";
        removeCart();
        cartCount();
        cartInfo();
    }

    function addtoCart($item) {
        $db = get_mysqli_connection();
        $query = $db->prepare("SELECT prod_desc FROM Products WHERE pID = ?");
        $query->bind_param("i", $item);
        $query->execute();
    	$result = $query->get_result();
        $row = $result->fetch_assoc();
        $_SESSION['cart'][] = $row["prod_desc"];
    }

    function removeCart() {
        $_SESSION['cart'] = [];
    }

    function cartCount() {
        echo "<br>Items in cart: " . count($_SESSION['cart']);
    }
    function cartInfo() {
        echo "<br><br>Info:<br>";
        $total = 0;
        $db = get_mysqli_connection();
        if(count($_SESSION['cart']) > 0) {
            foreach($_SESSION['cart'] as $item) {
            $query = $db->prepare("SELECT price FROM Products WHERE prod_desc = ?");
            $query->bind_param("s", $item);
            $query->execute();
            $result = $query->get_result();
            $row = $result->fetch_assoc();
                echo $item . "       $" . $row["price"] . "<br>";
                $total += $row["price"];
            }
        } else {
            echo "Empty Cart";
        }
        echo "<br>========================<br>";
        echo "Total: $" . $total;
    }
    ?>
</body>
</html>