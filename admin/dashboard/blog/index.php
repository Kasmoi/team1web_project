<?php 
    $title = "New Blog";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
    require("../../modules/blog/read.php");

 ?> 
<main>
    <div class = "pg-m">
        <p class="breadcrumb"><a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a></p>
        <h1 class="pg-heading"><i class="fa-solid fa-book"></i> Blogs</h1>
        <a href="create.php"><button class=" btn addnew btn-prim"> NEW BLOG </button></a>
    </div>

    <div class = 'datatable'> 
<table id="table_id" class="display">
    <?php $data=getAllData();
          if (empty($data)){
              echo "<h3>No Data Found</h3>";
              exit();
        } else { ?>
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Blog Title</th>
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
         <td><?php echo $i?></td>
         <td><?php echo $row["title"] ?></td>
         <td>
         <form method = "POST" action="../../modules/blog/actions.php?id=<?php echo $row['blogID'] ?>" >
                <input class="btn btn-prim" type = "submit" name="update" value="Update"/>
                <input class="btn btn-danger" type = "submit" name="delete" value="Delete"/>
                </form>
                </td>
                </tr>
        <?php $i++;} } ?>

    </tbody>
</table>
    
</div>

    
</main>
<?php require("../../inc/footer.php");?>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable( {
        "searching":false,

    }
       
    );
} );
</script>
</body>
</html>