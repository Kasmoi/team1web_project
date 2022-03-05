<?php 
    require("../../modules/auth/checkSession.php");
    $title = "New Slider";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
 ?>

<main>
<div class = "pg-m">
<p class="breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Sliders</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-sliders"></i> New Slider</h1>
        
</div>
<form class="create-form" action = "../../modules/slider/add.php" method = "POST" enctype = "multipart/form-data">
    <label for="slidertext">Slider Text:</label><br>
    <textarea id="textarea" name="slidertext"></textarea> <br>
    <label for="slidertext">Slider Image:</label><br>
    <input type = "file" name = "choosefile" accept="image/*" onchange="preview_image(event)"/><br>
    <p style="margin-bottom:10px;"><img  id="output_image" width="300" height="150"/></p>
    <input class="btn btn-prim" type = "submit" name="create"/>
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
