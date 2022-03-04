<?php 
    require("../../modules/auth/checkSession.php");
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
 <form class="create-form" action="../../modules/blog/add.php" method="POST" enctype = "multipart/form-data" >
 <label for="title">Title:</label>
 
 <input class="txtin" type="text" id="title" name="title" size="90" required><br>
 <?php 
    
    if (isset($_GET['terror'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['terror'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?> 
 <label for="textarea">Content:</label>
 <textarea id="textarea" name="content" required></textarea> <br>
 <?php 
    
    if (isset($_GET['cerror'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['cerror'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?> 
<label for="image">Image:</label>
<input id ="image" type = "file" name = "img" accept="image/*" required onchange="preview_image(event)"/><br>
<?php 
    
    if (isset($_GET['ierror'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['ierror'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?>
<p style="margin-bottom:10px;"><img  id="output_image" width="300" height="150"/></p>
<input class="btn btn-prim" type = "submit" name="submit"/> 
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