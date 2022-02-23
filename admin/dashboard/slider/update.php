<?php 
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
        <h1 class="pg-heading"><i class="fa-solid fa-sliders"></i> Update Slider</h1>
        
</div>
<form class="create-form" action = "../core/slider.php" method = "POST" enctype = "multipart/form-data">
    <label for="slidertext">Slider Text: </label>
    <input class="txtin" type="text" id="slidertext" name="slidertext" size="50" value="<?php echo $row['sliderText']; ?> "><br>
    <label for="slidertext">Slider Image:</label>
    <p style="margin-bottom:10px;margin-top:10px;"><img src="../../../uploads/slider/<?php echo $row['imgName']; ?>" width="300" height="150"/></p>
    <input type = "file" name = "choosefile"  accept="image/*" onchange="preview_image(event)" /><br>
    <p style="margin-bottom:10px;"><img  id="output_image" width="300" height="150"/></p>
    <input class="btn btn-prim" type = "submit" name="update"/>
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
<script type="text/javascript" src="../assets/js/preview.js"></script>
</body>
</html>