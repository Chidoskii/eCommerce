<?php
/*-----------------------------------------------LOG IN-----------------------------------------------*/
function get_ven($email) {
    $db = get_mysqli_connection();
    $query = $db->prepare("SELECT * FROM Vendors  WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    $results = $result->fetch_all(MYSQLI_ASSOC);

    
    return $results[0];

}

function get_user($email) {
    $db = get_mysqli_connection();
    $query = $db->prepare("SELECT * FROM Users  WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    $results = $result->fetch_all(MYSQLI_ASSOC);

    
    return $results[0];

}

/*-----------------------------------------------USER-----------------------------------------------*/
// Filter by Category
function filter_category($category, $conn) {
	$sql = "SELECT pID, category, prod_desc, rating, price, img FROM Products WHERE category= ?";
	$query = $conn->prepare($sql);
	$query->bind_param("s", $category);
	$query->execute();
	$result = $query->get_result();
  
  return $result;
}

// GET ALL
function getAll($conn) {
	$sql = "SELECT pID, category, prod_desc, rating, price, img FROM Products;";
	$query = $conn->prepare($sql);
	$query->execute();
	$result = $query->get_result();
  
  return $result;
}



/*-----------------------------------------------GENERAL-----------------------------------------------*/


?>