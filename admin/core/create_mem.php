<?php
//needed extra files
include '../database/querybuilder.php' ;
require("./inc/head.php");
require("./inc/header.php");
require("./inc/sidebar.php");
//posts
$title= $_POST['mem_title'];
$description= $_POST['description'];
$price= $_POST['price'];
if (empty($_POST['title']) or empty($_POST['description']) or empty($_POST['price'])) {
    echo "there is something missing in the input or it the input was wrong";
}
//if none of the posts is empty
    else {
$query="insert into membership (fname, lname, city, groupid)
values('$title', '$description', '$price')";
db_query($query);
echo "New membership added";
echo "<a href='../view_membership.php' class='top'>view all memberships </a>";
}
//footer
require("./inc/footer.php");?>
<script type="text/javascript" src="./assets/js/sidebar.js"></script>
</body>
</html>