<?php
    require("../../modules/auth/checkSession.php");
    $title = "Add Trainers";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
 ?>

<main>
<div class = "pg-m">
    <p class="breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Trainers</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-dumbbell"></i> New Trainer</h1>
        
</div>

  <form class="create-form" method="POST" action="../../modules/trainer/add.php" enctype="multipart/form-data">
  
  <?php 
    //gets error from the url
    if (isset($_GET['error'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['error'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?>
  <label for="title">Name:</label> <br>
  <input class="txtin" type="text" id="name" name="name" size="90"/><br>
  <label for="textarea">Description:</label>
  <textarea id="textarea" name="description" ></textarea> <br>
  <label for="title">Email:</label> <br>
  <input class="txtin" type="email" name="email" /> <br>
  <label for="image">Image:</label><br>
  <input type = "file" accept="image/*" onchange="preview_image(event)" name = "imgToUpload"/><br>
  <img  id="output_image" width="200" height="150"/><br>
  <input class="btn btn-prim" type = "submit" name="addtrainer"/> 
  </form>
</main>
<?php require("../../inc/footer.php");?>

