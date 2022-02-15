<?php
require './database/connection.php';
function uploadImage(){

    $file_name = $_FILES["choosefile"]["name"];
    $extensions= array("jpeg","jpg","png");
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $temp_name = $_FILES["choosefile"]["tmp_name"];
 
    $folder = "img/".$file_name;

    // Validate file input to check if is not empty
    if  (empty($file_name)) {

        header("location:form.php?error=Image is required");

    //// Validate file input to check if is with valid extension
    } else if (!in_array($file_ext,$extensions)) {
        header("location:form.php?error=Upload valiid images. Only PNG and JPEG are allowed.");
    //checks if image with same name exits
    } else if (file_exists($folder)) {
        header("location:form.php?error=Image with same name already exists");
    //// Validate image file size
    } else if (filesize($temp_name) > 2097152) {
        header("location:form.php?error=Image is too large, Upload less than or equal 2MB.");    
    } else {

        //connect to the database
        $conn=db_connect();

        // query to insert the file path of the image to database

        $sql = "insert into images(filename) VALUES ('$folder')";

        // if the image is uploaded to the "image" folder"  and filepath is inserted on database

        if (move_uploaded_file($temp_name, $folder) && mysqli_query($conn, $sql) ) {

            header("location:form.php?msg=Image uploaded successfully");

        }else{
            header("location:form.php?error=Problem in uploading image files.");
        }       
                
    
}

}

// check if the user has clicked the button "UPLOAD" 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    uploadImage();
}

?>