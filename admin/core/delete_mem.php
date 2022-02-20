<?php
    $title = "Admin delete membership";
    require("./inc/head.php");
    require("./inc/header.php");
    require("./inc/sidebar.php");
    require ("../Database/querybuilder.php");
    $a = $_GET['membershipID'];
    $data="Delete from membership WHERE membershipID=".$a."";
    db_query($data);
    echo "header(\"location: ../view_membership.php\")";



?>
