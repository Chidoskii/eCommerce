<?php
// Sorting by Price
function sort_price($order, $desc) {
	if($desc) {
	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY price DESC";
	} else {	
	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY price";
	}
	$query = $db->prepare($sql);
	//$query->bind_param("s", $order);
	$query->execute();
	$result = $query->get_result();

	/* Prints the result
	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
}*/
}

//sort by rating
function sort_rating($order, $desc) {
	if($desc) {
	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY rating DESC";
	} else {
	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY rating";
	}
	$query = $db->prepare($sql);
	//$query->bind_param("s", $order);
	$query->execute();
	$result = $query->get_result();

	/* Prints result
	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
}*/
}

// Filter by Category
function filter_category($category) {
	$sql = "SELECT pID, category, prod_desc, rating, price FROM Products WHERE category= ?";
	$query = $conn->prepare($sql);
	$query->bind_param("s", $category);
	$query->execute();
	$result = $query->get_result();

	/* prints result
	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
}*/
}

// Filter by vendor
function filter_vendor($vendor) {
	$sql = "SELECT Vendors.vendor_name, Products.pID, Products.prod_desc, Products.rating, 
	Products.price FROM Vendors RIGHT JOIN Products 
	ON Vendors.vID = Products.vID WHERE Vendors.vendor_name= ? ORDER BY Products.pID";
	$query = $conn->prepare($sql);
	$query->bind_param("s", $vendor);
	$query->execute();
	$result = $query->get_result();

	/*prints the result
	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo $row["prod_desc"]." rating: " .
		$row["rating"] . " price: $" . $row["price"] . "<br>";
	}
}*/
}

//Function to print order details
function order_detail($ID) {
	$sql = "SELECT Products.prod_desc, Orders.total FROM Orders RIGHT JOIN Products 
ON Orders.pID = Products.pID WHERE Orders.uID=? ORDER BY Orders.oID";
	$query = $conn->prepare($sql);
	$query->bind_param("i", $ID);
	$query->execute();
	$result = $query->get_result();

	//prints each order
}

//Function to print total
function total($ID) {
	$sql = "SELECT SUM(total) FROM Orders WHERE uID=?";
	$query = $conn->prepare($sql);
	$query->bind_param("i", $ID);
	$query->execute();
	$result = $query->get_result();
	
	/*Prints result
	$row = $result->fetch_assoc();
	$value = $row["SUM(total)"];
	echo $value;*/
}
?>
