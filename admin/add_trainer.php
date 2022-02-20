<?php
    $title = "Add trainer to trainers page";
    require("./inc/head.php");
    require("./inc/header.php");
    require("./inc/sidebar.php");
    require ("../Database/querybuilder.php");
 ?>

<form name="add_trainer" method="post" action="./core/add_trainer.php">
<label for="trainerName">Name: </label><br>
<input type="text" id="trainerName" name="trainerName"><br>
<label for="desc">Description: </label><br>
<input type="text" id="desc" name="desc"><br>
<label for="email">Email: </label><br>
<input type="text" id="email" name="email"><br><br>
<input type="submit" value="add trainer">
</form>
<?php require("./inc/footer.php");?>
<script type="text/javascript" src="./assets/js/sidebar.js"></script>