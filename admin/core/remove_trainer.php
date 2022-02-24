<?php
    $title = "Admin delete trainer by name";
    require("../inc/head.php");
    require("../inc/header.php");
    require("../inc/sidebar.php");
    require ("../../database/querybuilder.php");

    $id = $_POST['id'];
    if (empty($_POST['id'])) {
        echo "<b>Make sure you gave a name</b>";
    } else {
        $removequery="delete from trainers WHERE trainerID=${id}";
        db_query($removequery);
    }
?>