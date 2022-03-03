<?php
require 'read.php';

function deleteBlog($id){
    $data=getDataById($id);
    $row = mysqli_fetch_assoc($data);

    $imgPath = "/var/www/html/team1web_project/uploads/blog/".$row['imgName'];
    $query = "delete from blogs where blogId=".$row['blogID'];
    if(db_query($query)){

        if(unlink($imgPath) ){
            header("location:../../dashboard/blog/index.php?msg= Slider Deleted Successfully");
            exit();
        }
    }else {
        header("location:../../dashboard/blog/index.php?error= Unable to Delete"); 
    }

}






if(isset($_POST['update'])){

    if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
        $id=$_GET['id'];
        header("location:../../dashboard/blog/update.php?id=$id");
    }

 }elseif (isset($_POST['delete'])){
    
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            deleteBlog($id);
        }
     }
 

?>