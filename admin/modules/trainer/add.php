<?php
//database query builder
require '../../../database/querybuilder.php';

// check if the form is submitted by post 
    
if (($_SERVER['REQUEST_METHOD'] == 'POST')){
    //check if user clicked the add trainer
    if(isset($_POST['addtrainer'])){
        //get form field
        $name= $_POST['name'];
        $description= $_POST['description'];
        $email= $_POST['email'];
        $file_name = $_FILES["imgToUpload"]["name"];
        $temp_name = $_FILES["imgToUpload"]["tmp_name"];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        //rename the image
        $randomno = rand(0,10000);
        $rename = 'trainer-image-'.date('Ymdhis').$randomno;
        $file_name = $rename.'.'.$file_ext;
        //path to upload images
        $folder = "../../../uploads/trainer/".$file_name;
        //move image to trainers folder
        if(move_uploaded_file($temp_name, $folder)){
            $query="insert into trainers(name, description, email,imgName) values('$name', '$description', '$email','$file_name')";
            //execute query to insert into trainers
            if(db_query($query)){
                header("location:../../dashboard/trainer/?msg=New Trainer Added Successfully"); 
            }else{
                $error=db_error();
                header("location:../../dashboard/trainer/create.php/?error= $error.Something went wrong.Try Again");
                }
            }

        }
    }
?>