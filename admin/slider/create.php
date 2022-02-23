<?php 
    $title = "New Slider";
    require("../inc/head.php");
    require("../inc/header.php");
    require("../inc/sidebar.php");
 ?>

<main>
<div class = "pg-m">
        <a href="index.php"><i class="fa-solid fa-arrow-left"></i> Sliders</a>
        <h1 class="pg-heading"><i class="fa-solid fa-sliders"></i> New Slider</h1>
        
</div>
<form class="create-form" action = "../core/slider.php" method = "POST" enctype = "multipart/form-data">
    <label for="slidertext">Slider Text:</label>
    <input class="txtin" type="text" id="slidertext" name="slidertext" size="50"><br>
    <label for="slidertext">Slider Image:</label>
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
<?php require("../inc/footer.php");?>
<script type="text/javascript" src="../assets/js/preview.js"></script>
</body>
</html>