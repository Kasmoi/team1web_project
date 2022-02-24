<?php
require("../inc/head.php");
require("../inc/header.php");
require("../inc/sidebar.php");
require ("../../database/querybuilder.php");

$rand = random_int(1, 999);
$trainerID = $rand;
$name = $_POST['trainerName'];
$desc = $_POST['desc'];
$email = $_POST['email'];
$imgName = $_POST['imgName'];

if (empty($_POST['trainerName']) || empty($_POST['desc']) || empty($_POST['email']) || empty($_POST['imgName'])) {
    echo "<b>Make sure you filled the form</b>";
} else {
    $query="insert into trainers (trainerID, name, description, email, imgName)
    values('$trainerID', '$name', '$desc', '$email', '$imgName')";
    db_query($query);
}

require("../inc/footer.php");
?>

<script type="text/javascript" src="./assets/js/sidebar.js"></script>

