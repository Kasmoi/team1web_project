<?php 
    $title = "New Blog";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
 ?>
 <main>
 <div class = "pg-m">
    <p class="breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Blogs</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-book"></i> New Blog</h1>
        
</div>
 <form class="create-form" action="">
 <label for="slidertext">Title:</label>
 <input class="txtin" type="text" id="slidertext" name="slidertext" size="90"><br>
 <label for="textarea">Content:</label>
 <textarea id="textarea" name="textarea"></textarea> <br>
<label for="slidertext">Image:</label>
<input type = "file" name = "choosefile" accept="image/*" onchange="preview_image(event)"/><br>
<p style="margin-bottom:10px;"><img  id="output_image" width="300" height="150"/></p>
<input class="btn btn-prim" type = "submit" name="create"/> 
</form>

</main>
<script>
    tinymce.init({
      selector: '#textarea',
      menubar:false,
      branding:false
    });
  </script>
  <script type="text/javascript" src="../../assets/js/preview.js"></script>
</body>
</html>