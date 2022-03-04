<?php
require '../../../database/querybuilder.php';
include '../../utils/validate.php';

function addImages(){
      
        for($i = 0; $i < count($_FILES["gimages"]["name"]);$i++){

            $file_name = $_FILES["gimages"]["name"][$i];
            $extensions= array("jpeg","jpg","png");
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $temp_name = $_FILES["gimages"]["tmp_name"][$i];
            //renaming images
            $randomno = rand(0,10000);
            $rename = 'gallery-image-'.date('Ymdhis').$randomno;
            $newname = $rename.'.'.$file_ext;
            //path to upload images
            $folder = "../../../uploads/gallery/".$newname;

            // Validate slider text or file input to check if is not empty
            if (empty($file_name)){
            header("location:../../dashboard/gallery/?error=Please select images to upload");

            //// Validate file input to check if is with valid extension
            } else if (!in_array($file_ext,$extensions)) {
                header("location:../../dashboard/gallery/?error=Upload valiid images. Only PNG and JPEG are allowed.");
            //// Validate image file size
            } else if (filesize($temp_name) > 2097152) {
                header("location:../../dashboard/gallery/?error=Image is too large, Upload less than or equal 2MB.");    
            } else {
               
                 // if the image is uploaded to the "given" folder" 

                if (move_uploaded_file($temp_name, $folder)) {
            
                // query to insert the name of the image to database

                    $sql = "insert into gallery(imgName) VALUES ('$newname')";

                    //query to the database
                    db_query($sql);

                    header("location:../../dashboard/gallery/?msg=Images added Successfully");

                }else {
                    header("location:../../dashboard/gallery/?error=Problem in adding images.Try again");
                }       
                
            }


       }    
    
}
// check if the user has clicked button 
    
if (($_SERVER['REQUEST_METHOD'] == 'POST')){

    if(isset($_POST['upload'])){
       addImages();

   }
}
?>

