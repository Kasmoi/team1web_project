<?php
require 'read.php';
include '../../utils/validate.php';
function deleteSlider($id){
        $data=getDataById($id);
        $row = mysqli_fetch_assoc($data);

        $imgPath = "../../../uploads/slider/".$row['imgName'];
        $query = "delete from sliders where sliderId=".$row['sliderID'];
        if(db_query($query)){

            if(unlink($imgPath) ){
                header("location:../../dashboard/slider/index.php?msg= Slider Deleted Successfully");
                exit();
            }
        }else {
            header("location:../../dashboard/slider/index.php?error= Unable to Delete"); 
        }

}
function doUpdate($id){

    $slider_txt = $_POST["slidertext"] ;
    $file_name = $_FILES["img"]["name"];
    $extensions= array("jpeg","jpg","png");
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $temp_name = $_FILES["img"]["tmp_name"];
    $data=getDataById($id);
    $row = mysqli_fetch_assoc($data);
    // Validate slider text to check if is not empty
    if (empty($slider_txt)){
        header("location:../../dashboard/slider/update.php?id=$id & error=Slider text can't be empty");
    }  

    //if file is not empty(changed) 
    if(!empty($file_name)){

        if (!in_array($file_ext,$extensions)) {
            header("location:../../dashboard/slider/update.php?id=$id & error=Upload valid images. Only PNG and JPEG are allowed.");
            //// Validate image file size
        } else if (filesize($temp_name) > 2097152) {
            header("location:../../dashboard/slider/update.php?id=$id & error=Image is too large, Upload less than or equal 2MB.");
        } else {
            //renaming images
            $randomno = rand(0,10000);
            $rename = 'slider-image-'.date('Ymdhis').$randomno;
            $file_name = $rename.'.'.$file_ext;
            //path to upload images
            $folder = "../../../uploads/slider/".$file_name;
            move_uploaded_file($temp_name, $folder);
            //removing old image from folder
            $oldImg = "../../../uploads/slider/".$row['imgName'];
            unlink($oldImg);
            

        }
    //if unchanged set the file name same to previous image
    }else{
        $file_name = $row['imgName'];
    }
    //update query to update sliders
    $query = "update sliders set sliderText='$slider_txt',imgName = '$file_name' where sliderID='$id'";
     //query to the database
    $execute = db_query($query);

    if($execute){
        header("location:../../dashboard/slider/index.php?msg=Slider Updated Successfully");
    }else{
        header("location:../../dashboard/slider/index.php?error=Some issues in updating.Try Again");
    }


}

if (($_SERVER['REQUEST_METHOD'] == 'POST')){

    if(isset($_POST['update'])){

        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            header("location:../../dashboard/slider/update.php?id=$id");
        }
    
     }
     elseif(isset($_POST['delete'])){
        
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            deleteSlider($id);
        }
     }
     elseif(isset($_POST['updateslider'])){
    
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            doUpdate($id);
        }
     }
    
}



?>