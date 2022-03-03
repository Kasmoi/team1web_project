<?php

$title = "Gallery";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
    require("../../modules/gallery/read.php");

?>

<main>
<div class = "pg-m">
        <p class="breadcrumb"><a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a></p>
        <h1 class="pg-heading"><i class="fa-solid fa-images"></i> Gallery</h1>
    </div>
<form class="create-form" action="../../modules/gallery/add.php" method="POST" enctype = "multipart/form-data" >
<?php 
    if (isset($_GET['msg'])) { 
        echo '<div class="msg">';
        $msg= $_GET['msg'];
        echo '<i class="fa-solid fa-check"></i> '.$msg;
        echo '</div>';
    }
    ?>
<label for="galleryimages">Upload Gallery Images:</label>
<input type = "file" name = "gimages[]" accept="image/*" multiple><br>
<input class="btn btn-prim" type = "submit" name="upload"/>
<?php 
    
    if (isset($_GET['error'])) { 
        echo '<p class="errorMsg">';
        $errorMsg= $_GET['error'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p>';
    }
    ?>
</form> 
<!--Gallery-->
<div class="container">
          <div class="pg-head">
          <h3>Gallery Images </h3>
          <div class="pagination">
                <?php for($x=1;$x <= $pages;$x++){ ?>
                <a href="?page=<?php echo $x;?> & per-page=<?php echo $perPage;?>" class="<?php if ($page === $x ){ echo "active";}?>"><?php echo $x; ?> </a>
               <?php } ?>
        </div>
        </div>
          <div class="gl-images">
          <?php $data=getAllData($start,$perPage);
          if (empty($data)){
              echo "<h3>No Images Found</h3>";
              
        } else {
        // output data of each row
        while($row = mysqli_fetch_assoc($data)) {
            ?> 
            <div class="content">
                <img class="gl-img" src="../../../uploads/gallery/<?php echo $row["imgName"]?>" alt="gallery-image">
                <div class="middle">
                 <div class="dbtn">
                 <form method = "POST" action="../../modules/gallery/actions.php?id=<?php echo $row['imgID'] ?>" >
                    <input class="btn btn-danger" type = "submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this image?');"/>
                </form>
                 </div>
                </div>
            </div>
            <?php } } ?>
    </div>       
</div>
</main>
<?php require("../../inc/footer.php");?>
<script type="text/javascript" src="./assets/js/sidebar.js"></script>
</body>
</html>