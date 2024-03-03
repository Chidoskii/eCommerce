<?php
require_once("./php/config.php");

if (empty($_SESSION["logged_in"])) {
    header("Location: login.php");
}

if ($_SESSION["is_emp"] == false) {
    header("Location: ../index.php");
}


if(!isset($_SESSION["is_emp"])){
  require_once("../index.php");
}
?>
<h3>
<?php
echo "Our Hardest working employee, " . $_SESSION["get_emp"]["first_name"] . " " . $_SESSION["get_emp"]["last_name"] . "!";
?>
</h3>


<?php
if (!empty($_SESSION["affected_rows"])) {
    echo "Deleted " . $_SESSION["affected_rows"] . " rows";
    unset($_SESSION["affected_rows"]);
}
?>


