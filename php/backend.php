<!DOCTYPE html>
<html>
	<head>
		<title>
		test
		</title>
	</head>
	<body>
		<p>Testing</p>

	<?php
	$servername = "localhost";
	$username = "rplascencia";
	$password = "bov3Veck";
	$database = "rplascencia";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	if ($conn->connect_error) {
		die("failed connection " . $conn->connect_error);
	}

	echo "Price search<br><br>";

	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY price";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
	} else {
		echo "Failed";
	}

	echo "<br>Rating search<br><br>";

	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY rating";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
	} else {
		echo "Failed";
	}

	echo "<br>Category filter<br><br>";

	$sql = "SELECT pID, category, prod_desc, rating, price FROM Products WHERE category= ?";
	$category = "Electronics";
	$query = $conn->prepare($sql);
	$query->bind_param("s", $category);
	$query->execute();
	$result = $query->get_result();

	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
	} else {
		echo "Failed";
	}

	echo "<br>Vendor filter: Doll Le Fevre<br><br>";

	$sql = "SELECT Vendors.vendor_name, Products.pID, Products.prod_desc, Products.rating, 
	Products.price FROM Vendors RIGHT JOIN Products 
	ON Vendors.vID = Products.vID WHERE Vendors.vendor_name= ? ORDER BY Products.pID";
	$category = "Doll Le Fevre";
	$query = $conn->prepare($sql);
	$query->bind_param("s", $category);
	$query->execute();
	$result = $query->get_result();

	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
	} else {
		echo "Failed";
	}

	/*echo "<br>Your Order:<br><br>";
	$sql = "Select"*/

	echo "<br>Total: ";
	$sql = "SELECT SUM(total) FROM Orders WHERE uID=?";
	$ID = '1';
	$query = $conn->prepare($sql);
	$query->bind_param("i", $ID);
	$query->execute();
	$result = $query->get_result();
	
	$row = $result->fetch_assoc();
	$value = $row["SUM(total)"];
	echo $value;

	$conn->close();
	?>
	
	</body>
</html>
