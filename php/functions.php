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


/*-----------------------------------------------GENERAL-----------------------------------------------*/


?>