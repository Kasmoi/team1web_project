<?php
require '../../../database/querybuilder.php';

if (($_SERVER['REQUEST_METHOD'] == 'POST')){
    //check if user clicked update button
    if(isset($_POST['update'])){
        //check if id is set in url and is a number
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            //get id from url
            $id=$_GET['id'];
            //redirect to update form with id on url
            header("location:../../dashboard/trainer/update.php?id=$id");
        }
    
     }
     //check if user clicked delete button 
     elseif(isset($_POST['delete'])){
        //check if id is set in url
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            //get id from the url
            $id=$_GET['id'];
            //sql to delete the data
            $delquery="delete from trainers where trainerID='$id'";
            //execute query if success
            if(db_query($delquery)){
                //delete image in uploads and redirect to trainer page with success message
                header("location:../../dashboard/trainer/?msg= Trainer Deleted Successfully"); 
            
            //if query fails to execute
            }else{
                //redirect to membership page with error message
                header("location:../../dashboard/trainer/?error= Unable To Delete.Try Again");
            }
            
        }
     }
     //check if user clicked update trainer button
     elseif(isset($_POST['updatetrainer'])){
    
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            //get old image name from database
            $query = "select imgName from trainers where trainerID ='$id'";
            $idata = db_select_by_id($query);
            $irow  = mysqli_fetch_assoc($idata);
            //get data from the form
            $name= $_POST['name'];
            $description= $_POST['description'];
            $email= $_POST['email'];
            $file_name = $_FILES["imgToUpload"]["name"];
            $temp_name = $_FILES["imgToUpload"]["tmp_name"];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            
            //if image is changed
            if(!empty($file_name)){
            //rename the image
            $randomno = rand(0,10000);
            $rename = 'trainer-image-'.date('Ymdhis').$randomno;
            $file_name = $rename.'.'.$file_ext;
            //path to upload images
            $folder = "../../../uploads/trainer/".$file_name;

            move_uploaded_file($temp_name, $folder);
            //removing old image from folder
            $oldImg = "../../../uploads/trainer/".$irow['imgName'];
            unlink($oldImg);
            //sets filename as previous
            } else {
                $file_name = $irow['imgName'];
            }
            //update query
            $query = "update trainers set name='$name',description='$description',email='$email',imgName='$file_name' where trainerID='$id'";
                //execute query if executed redirects to trainer page with success message
            if(db_query($query)){
                    header("location:../../dashboard/trainer/?msg= Trainer Updated Successfully"); 
                    
            }else{
                 header("location:../../dashboard/trainer/update.php/?id=$id & error=Something went wrong.Try Again");
                }
            }    
            
            
            
        }
     
}
?>