<?php 
    require("../../modules/auth/checkSession.php");
    $title = "Update Slider";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
    require("../../modules/slider/read.php");
    
    if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
        $id=$_GET['id'];
        $data=getDataById($id);
        $row = mysqli_fetch_assoc($data);

    }
    
 ?>
 <main>
<div class = "pg-m">
        <p class = "breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Sliders</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-slider"></i> Update Slider</h1>
        
</div>
<form class="create-form" action = "../../modules/slider/actions.php?id=<?php echo $row['sliderID']?>" method = "POST" enctype = "multipart/form-data">
    <label for="slidertext">Slider Text: </label>
    <textarea id="textarea" name="slidertext" required><?php echo html_entity_decode($row["sliderText"]); ?></textarea> <br>
    <label for="sliderimage">Slider Image:</label>
    <p style="margin-bottom:10px;margin-top:10px;"><img src="../../../uploads/slider/<?php echo $row['imgName']; ?>" width="300" height="150"/></p>
    <input type = "file" name = "img"  accept="image/*" onchange="preview_image(event)" value="<?php echo $row['imgName']; ?>" /><br>
    <p style="margin-bottom:10px;"><img  id="output_image" width="300" height="150"/></p>
    <input class="btn btn-prim" type = "submit" name="updateslider"/>
    <?php 
    
    if (isset($_GET['error'])) { 
        echo '<p class="errorMsg">';
        $errorMsg= $_GET['error'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p>';
    }
    ?> 
     						
</form>
</main>
<?php require("../../inc/footer.php");?>
