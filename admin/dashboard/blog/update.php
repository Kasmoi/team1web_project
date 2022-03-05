<?php 
    require("../../modules/auth/checkSession.php");
    $title = "Update Blog";
    require("../../inc/head.php");
    require("../../inc/header.php");
    require("../../inc/sidebar.php");
    require("../../modules/blog/read.php");
    
    if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
        $id=$_GET['id'];
        $data=getDataById($id);
        $row = mysqli_fetch_assoc($data);

    }
    
 ?>
 <main>
 <div class = "pg-m">
    <p class="breadcrumb">
        <a href="../main/"><i class="fa-solid fa-arrow-left"></i> Dashboard</a> /
            <a href="index.php"> Blogs</a>
        </p>
        <h1 class="pg-heading"><i class="fa-solid fa-book"></i> Edit Blog</h1>
        
</div>
 <form class="create-form" action="../../modules/blog/actions.php?id=<?php echo $row['blogID']?>" method="POST" enctype = "multipart/form-data" >
 <label for="title">Title:</label>
 
 <input class="txtin" type="text" id="title" name="title" value="<?php echo $row['title']?>" required  size="90"><br>
 <?php 
    
    if (isset($_GET['terror'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['terror'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?> 
 <label for="textarea">Content:</label>
 <textarea id="textarea" name="content" required>
     <?php echo html_entity_decode($row["content"]) ?>
 </textarea> <br>
 <?php 
    
    if (isset($_GET['cerror'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['cerror'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?> 
<label for="image">Image:</label>
<p style="margin-bottom:10px;margin-top:10px;"><img src="../../../uploads/blog/<?php echo $row['imgName']; ?>" width="300" height="150"/></p>
<input id ="image" type = "file" name = "img" accept="image/*" onchange="preview_image(event)"/><br>
<?php 
    
    if (isset($_GET['ierror'])) { 
        echo '<p class="errorMsg"> ';
        $errorMsg= $_GET['ierror'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p><br>';
    }
    ?>
<p style="margin-bottom:10px;"><img  id="output_image" width="300" height="150"/></p>
<input class="btn btn-prim" type = "submit" name="updateblog"/> 
</form>

</main>
