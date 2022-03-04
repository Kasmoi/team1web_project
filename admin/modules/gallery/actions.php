<?php
include 'read.php';
function delGalleryImg($id){
    $data=getDataById($id);
        $row = mysqli_fetch_assoc($data);

        $imgPath = "../../../uploads/gallery/".$row["imgName"];
        $query = "delete from gallery where imgID=".$row['imgID'];
        if(db_query($query)){

            if(unlink($imgPath) ){
                header("location:../../dashboard/gallery/?dmsg= Image Deleted Successfully");
                exit();
            }
        }else {
            header("location:../../dashboard/gallery/?derror= Unable to Delete"); 
        }
}

if(isset($_POST['delete'])){
    
    if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
        $id=$_GET['id'];
        delGalleryImg($id);
    }
 }
?>