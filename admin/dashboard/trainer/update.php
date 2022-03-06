<?php
    require("../../modules/auth/checkSession.php");
    $title = "Update Trainers";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
    require("../../../database/querybuilder.php");
    
    if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
        $id=$_GET['id'];
        $query = "select * from trainers where trainerID='$id'";
        $data=db_select_by_id($query);
        $row = mysqli_fetch_assoc($data);

    }
    ?>

<main>
<div class = "pg-m">
    <p class="breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Trainers</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-dumbbell"></i> Update Trainer</h1>
        
</div>
  <form class="create-form" method="POST" action="../../modules/trainer/actions.php?id=<?php echo $row['trainerID']?>" enctype="multipart/form-data">
  
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
  <input class="txtin" type="text" id="name" name="name" size="90" value="<?php echo $row['name']; ?>"/><br>
  <label for="textarea">Description:</label>
  <textarea id="textarea" name="description" ><?php echo html_entity_decode($row["description"]); ?></textarea> <br>
  <label for="title">Email:</label> <br>
  <input class="txtin" type="email" name="email" value="<?php echo $row['email']; ?>" /> <br>
  <label for="image">Image:</label><br>
  <p style="margin-bottom:10px;margin-top:10px;"><img src="../../../uploads/trainer/<?php echo $row['imgName']; ?>" width="300" height="150"/></p>
  <input type = "file" accept="image/*" onchange="preview_image(event)" name = "imgToUpload"/><br>
  <img  id="output_image" width="200" height="150"/><br>
  <input class="btn btn-prim" type = "submit" name="updatetrainer"/> 
  </form>
</main>
<?php require("../../inc/footer.php");?>

