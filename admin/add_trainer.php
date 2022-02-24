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
<label for="imgName">Image URL: </label><br>
<input type="text" id="imgName" name="imgName"><br><br>
<input type="submit" value="add trainer"><br>
</form>
<h1>Remove trainer by id</h1>
<form name="remove_trainer" method="post" action="./core/remove_trainer.php">
<label for="trainerName">ID: </label><br>
<input type="text" id="id" name="id"><br>
<input type="submit" value="remove trainer"><br>
</form>
<?php require("./inc/footer.php");?>
<script type="text/javascript" src="./assets/js/sidebar.js"></script>