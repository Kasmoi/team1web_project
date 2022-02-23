<?php
    $title = "Admin delete trainer by name";
    require("./inc/head.php");
    require("./inc/header.php");
    require("./inc/sidebar.php");
    require ("../Database/querybuilder.php");

    $name = $_POST['trainerName'];
    if (empty($_POST['trainerName'])) {
        echo "<b>Make sure you gave a name</b>";
    } else {
        $removequery="Delete from trainers WHERE name=".$name."";
        db_query($removequery);
    }
?>