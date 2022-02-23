<?php
include '../database/querybuilder.php' ;
require("./inc/head.php");
require("./inc/header.php");
require("./inc/sidebar.php");

$name = $_POST['trainerName'];
$desc = $_POST['desc'];
$email = $_POST['email'];

if (empty($_POST['trainerName']) || empty($_POST['desc']) || empty($_POST['email'])) {
    echo "<b>Make sure you filled the form</b>";
} else {
    $query="insert into trainers (name, description, email)
    values('$name', '$desc', '$email')";
    db_query($query);
}

require("./inc/footer.php");
?>

<script type="text/javascript" src="./assets/js/sidebar.js"></script>

