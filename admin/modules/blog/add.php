<?php
require '../../../database/querybuilder.php';
include '../../utils/validate.php';
function createBlog(){
    $title = validate_input($_POST["title"]);
    $content = validate_input($_POST["content"]);
    $file_name = $_FILES["img"]["name"];
    $extensions= array("jpeg","jpg","png");
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $temp_name = $_FILES["img"]["tmp_name"];
    //renaming image
    $randomno = rand(0,10000);
    $rename = 'blog-image-'.date('Ymdhis').$randomno;
    $newname = $rename.'.'.$file_ext;
    //path to upload image
    $folder = "/var/www/html/team1web_project/uploads/blog/".$newname;

    // Validate blog title check if is not empty
    if (empty($title)){
        header("location:../../dashboard/blog/create.php?terror=Blog Title is required");
     // Validate blog content check if is not empty
    } else if (empty($content)){
        header("location:../../dashboard/blog/create.php?cerror=Blog Content is required");
    } else if (empty($file_name)){
        header("location:../../dashboard/blog/create.php?ierror=Image is required");
        //// Validate file input to check if is with valid extension
    } else if (!in_array($file_ext,$extensions)) {
        header("location:../../dashboard/blog/create.php?ierror=Upload valiid images. Only PNG and JPEG are allowed.");
    //// Validate image file size
    } else if (filesize($temp_name) > 2097152) {
        header("location:../../dashboard/blog/create.php?ierror=Image is too large, Upload less than or equal 2MB.");    
    } else {

        

        // if the image is uploaded to the "given" folder" 

        if (move_uploaded_file($temp_name, $folder)) {
            
            // query to insert the name of the image to database

            $sql = "insert into blogs(title,content,imgName) VALUES ('$title','$content','$newname')";

            //query to the database
            db_query($sql);

            header("location:../../dashboard/blog/index.php?msg=New Blog Added Successfully");

        }else {
            header("location:../../dashboard/blog/create.php?error=Problem in adding Blog.Try again");
        }       
                
    
}

}

     // check if the user has clicked button 
    
if (($_SERVER['REQUEST_METHOD'] == 'POST')){

     if(isset($_POST['submit'])){
        createBlog();

    }
}
?>