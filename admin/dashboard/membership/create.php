<?php
    require("../../modules/auth/checkSession.php");
    $title = "Add Memberships";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
 ?>

<main>
<div class = "pg-m">
    <p class="breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Memberships</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-users"></i> New Membership</h1>
        
</div>

  <form class="create-form" method="POST" action="../../modules/membership/add.php">
  
  <?php 
    
    if (isset($_GET['error'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['error'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?>
  <label for="title">Title:</label> <br>
  <input class="txtin" type="text" id="title" name="title" size="90"/><br>
  <label for="textarea">Description:</label>
  <textarea id="textarea" name="description"></textarea> <br>
  <label for="title">Price:</label> <br>
  <input class="txtin" type="number" name="price"/> <br>
  <input class="btn btn-prim" type = "submit" name="addmembership"/> 
  </form>
</main>
<?php require("../../inc/footer.php");?>

