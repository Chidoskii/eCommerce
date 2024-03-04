<?php
// Sorting by Price
function sort_price($order) {
	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY price ?";
	$query = $db->prepare($sql);
	$query->bind_param("s", $order);
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
function sort_rating($order) {
	$sql = "SELECT pID, prod_desc, rating, price FROM Products ORDER BY rating";
	$query = $db->prepare($sql);
	$query->bind_param("s", $order);
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

	/*Print the orders
	$sql = "Select"*/

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
