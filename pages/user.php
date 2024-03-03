<?php
require_once("./php/config.php");
if(!isset($_SESSION["is_emp"]) && !isset($_SESSION["is_user"])){
  require_once("../index.php");
}

?>


<?php
if (!empty($_SESSION["affected_rows"])) {
    echo "Deleted " . $_SESSION["affected_rows"] . " rows";
    unset($_SESSION["affected_rows"]);
}
?>





