<?php
 $msg = "";
 $error = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<style>
   body {
       margin-left:5%;
   }
   .error {
    background: #fdcdcd;
    color:red;
    padding:20px;
    width:200px;
    border: #ecc0c1 1px solid;
}

.success {
    background: #c5f3c3;
    padding:20px;
    width:200px;
    color:green;
    border: #bbe6ba 1px solid;
}
</style>

<body>
<h1>Upload Image</h1>
<form action = "image-upload.php" method = "POST" enctype = "multipart/form-data">
        <p> <input type = "file" name = "choosefile" /></p>
         <p><input type = "submit" name="uploadfile"/></p>						
</form>

    <?php 
    
     if (isset($_GET['error'])) { 
        echo '<p class="error">';
        $errorMsg= $_GET['error'];
        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
        echo '</p>';
    }
    
      ?> 
 

 
    <?php 
     
     if (isset($_GET['msg'])) { 
     echo '<p class="success">';
     $Msg= $_GET['msg'];
     echo '<i class="fas fa-check"></i>'.$Msg;
     echo '</p>';
    }
    
    ?> 
 <a href = "/grouptask/img/">Your Images </a>
</body>
</html>