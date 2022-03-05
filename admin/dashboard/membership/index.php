<?php
    require("../../modules/auth/checkSession.php");
    $title = "Memberships";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
    require ("../../../database/querybuilder.php");

    $query = "select * from memberships";
    $data=db_select($query);
    ?>

<main>
<div class = "pg-m">
    <p class="breadcrumb"><a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a></p>
    <h1 class="pg-heading"><i class="fa-solid fa-users"></i> Memberships</h1>
    <a href="create.php"><button class=" btn addnew btn-prim"> NEW MEMBERSHIP </button></a>
</div>
<?php 

if (isset($_GET['msg'])) { 
    echo '<div class="msg">';
    $msg= $_GET['msg'];
    echo '<i class="fa-solid fa-check"></i> '.$msg;
    echo '</div>';
}
?>
<div class = 'datatable'> 
<table id="table_id" class="display">
<?php 
      if (empty($data)){
          echo "<h3>No Data Found</h3>";
    } else { ?>
<thead>
    <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    <?php
     $i = 1;
    // output data of each row
    while($row = mysqli_fetch_assoc($data)) {
        ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row["title"]; ?></td>
     <td>£ <?php echo $row["price"];?></td>
     <td>
     <form method = "POST" action="../../modules/membership/actions.php?id=<?php echo $row['membershipID']; ?>" >
            <input class="btn btn-prim" type = "submit" name="update" value="Update"/>
            <input class="btn btn-danger" type = "submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this membership?');"/>
            </form>
            </td>
            </tr>
    <?php $i++; } } ?>

</tbody>
</table>

</div>
    
</main>

  
    


<?php require("../../inc/footer.php");?>

