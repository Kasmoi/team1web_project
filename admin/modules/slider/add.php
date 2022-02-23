<?php
require '../../../database/querybuilder.php';
include '../../utils/validate.php';
function createSlider(){
    $slider_txt = $_POST["slidertext"];
    $file_name = $_FILES["choosefile"]["name"];
    $extensions= array("jpeg","jpg","png");
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $temp_name = $_FILES["choosefile"]["tmp_name"];
 
    $folder = "/var/www/html/team1web_project/uploads/slider/".$file_name;

    // Validate slider text or file input to check if is not empty
    if (empty($slider_txt) || empty($file_name)){
        header("location:../../dashboard/slider/create.php?error=Slider text and image can't be empty");

   //// Validate file input to check if is with valid extension
    } else if (!in_array($file_ext,$extensions)) {
        header("location:../../dashboard/slider/create.php?error=Upload valiid images. Only PNG and JPEG are allowed.");
    //checks if image with same name exits
    } else if (file_exists($folder)) {
        header("location:../../dashboard/slider/create.php?error=Image with same name already exists");
    //// Validate image file size
    } else if (filesize($temp_name) > 2097152) {
        header("location:../../dashboard/slider/create.php?error=Image is too large, Upload less than or equal 2MB.");    
    } else {

        

        // if the image is uploaded to the "given" folder" 

        if (move_uploaded_file($temp_name, $folder)) {
            
            // query to insert the name of the image to database

            $sql = "insert into sliders(sliderText,imgName) VALUES ('$slider_txt','$file_name')";

            //query to the database
            db_query($sql);

            header("location:../../dashboard/slider/index.php?msg=New Slider Added Successfully");

        }else {
            header("location:../../dashboard/slider/create.php?error=Problem in adding slider.Try again");
        }       
                
    
}

}

     // check if the user has clicked button 
    
if (($_SERVER['REQUEST_METHOD'] == 'POST')){

     if(isset($_POST['create'])){
        createSlider();

    }
}

?>