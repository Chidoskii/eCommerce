<?php
require_once("config.php");

if (empty($_SESSION["logged_in"])) {
    header("Location: login.php");
}

if ($_SESSION["is_emp"] == false) {
    header("Location: index.php");
}


if(!isset($_SESSION["is_emp"])){
  require_once("index.php");
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






<div style="margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr 1fr;">
  <div class="qlink" style="background-color: rgb(216, 188, 29);"><a href="#">Champions</a></div>
  <div class="qlink" style="background-color: rgb(153, 37, 37);"><a href="#">Weight Class</a></div>
  <div class="qlink" style="background-color: rgb(0, 0, 0);"><a href="#">Fight Records</a></div>
</div>

<div class="queries" style="display: block;">

<br>
</div>