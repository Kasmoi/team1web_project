<?php 
    require("../../modules/auth/checkSession.php");
    $title = "Update Membership";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
    require("../../../database/querybuilder.php");
    
    if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
        $id=$_GET['id'];
        $query = "select * from memberships where membershipID='$id'";
        $data=db_select_by_id($query);
        $row = mysqli_fetch_assoc($data);

    }
    ?>
    <main>
    <div class = "pg-m">
    <p class="breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Memberships</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-users"></i> Update Membership</h1>
        
</div>

  <form class="create-form" method="POST" action="../../modules/membership/actions.php?id=<?php echo $row['membershipID']?>">
  
  <?php 
    
    if (isset($_GET['error'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['error'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?>
  <label for="title">Title:</label> <br>
  <input class="txtin" type="text" id="title" name="title" size="90" value="<?php echo $row['title']; ?>"/><br>
  <label for="textarea">Description:</label>
  <textarea id="textarea" name="description"> <?php echo html_entity_decode($row["description"]); ?> </textarea> <br>
  <label for="title">Price:</label> <br>
  <input class="txtin" type="number" name="price" value="<?php echo $row['price']; ?>"/> <br>
  <input class="btn btn-prim" type = "submit" name="updatemembership"/> 
  </form>
</main>
<?php require("../../inc/footer.php");?>