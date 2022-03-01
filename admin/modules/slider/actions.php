<?php
require 'read.php';

function deleteSlider($id){
        $data=getDataById($id);
        $row = mysqli_fetch_assoc($data);

        $imgPath = "/var/www/html/team1web_project/uploads/slider/".$row['imgName'];
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


?>