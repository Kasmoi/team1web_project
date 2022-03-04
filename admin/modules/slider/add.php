<?php
require '../../../database/querybuilder.php';
include '../../utils/validate.php';
function createSlider(){
    $slider_txt = $_POST["slidertext"];
    $file_name = $_FILES["choosefile"]["name"];
    $extensions= array("jpeg","jpg","png");
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $temp_name = $_FILES["choosefile"]["tmp_name"];
    

    // Validate slider text or file input to check if is not empty
    if (empty($slider_txt) || empty($file_name)){
        header("location:../../dashboard/slider/create.php?error=Slider text and image can't be empty");

   //// Validate file input to check if is with valid extension
    } else if (!in_array($file_ext,$extensions)) {
        header("location:../../dashboard/slider/create.php?error=Upload valiid images. Only PNG and JPEG are allowed.");
    //// Validate image file size
    } else if (filesize($temp_name) > 2097152) {
        header("location:../../dashboard/slider/create.php?error=Image is too large, Upload less than or equal 2MB.");    
    } else {

        //renaming images
        $randomno = rand(0,10000);
        $rename = 'slider-image-'.date('Ymdhis').$randomno;
        $newname = $rename.'.'.$file_ext;
        //path to upload images
        $folder = "../../../uploads/slider/".$newname;

        // if the image is uploaded to the "given" folder" 

        if (move_uploaded_file($temp_name, $folder)) {
            
            // query to insert the sliders data of to database

            $sql = "insert into sliders(sliderText,imgName) VALUES ('$slider_txt','$newname')";

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