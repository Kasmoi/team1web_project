<?php
require 'read.php';
include '../../utils/validate.php';
function deleteBlog($id){
    $data=getDataById($id);
    $row = mysqli_fetch_assoc($data);

    $imgPath = "../../../uploads/blog/".$row['imgName'];
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

function updateBlog($id){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $file_name = $_FILES["img"]["name"];
    $extensions= array("jpeg","jpg","png");
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $temp_name = $_FILES["img"]["tmp_name"];
    $data=getDataById($id);
    $row = mysqli_fetch_assoc($data);

    if (empty($title)){
        header("location:../../dashboard/blog/update.php?id=$id & terror=Blog title is required");
        exit();
    }else if (empty($content)){
        header("location:../../dashboard/blog/update.php.php?id=$id & cerror=Blog Content is required");
    }

    if(!empty($file_name)){

            //// Validate file input to check if is with valid extension
            if (!in_array($file_ext,$extensions)) {
                header("location:../../dashboard/blog/update.php?id=$id & ierror=Upload valiid images. Only PNG and JPEG are allowed.");
            //// Validate image file size
            } else if (filesize($temp_name) > 2097152) {
                header("location:../../dashboard/blog/update.php?id=$id & ierror=Image is too large, Upload less than or equal 2MB.");    
            } else {
                 //renaming image
                    $randomno = rand(0,10000);
                    $rename = 'blog-image-'.date('Ymdhis').$randomno;
                    $file_name = $rename.'.'.$file_ext;
                    //path to upload image
                    $folder = "../../../uploads/blog/".$file_name;
                    move_uploaded_file($temp_name, $folder);
                    //removing old image from folder
                    $oldImg = "../../../uploads/blog/".$row['imgName'];
                    unlink($oldImg);

            }

        }else{
            $file_name = $row['imgName'];
        }

        //update query to update blogs
    $query = "update blogs set title='$title',content = '$content',imgName = '$file_name' where blogID='$id'";
    //query to the database
   $execute = db_query($query);

   if($execute){
       header("location:../../dashboard/blog/index.php?msg=Blog Updated Successfully");
   }else{
       header("location:../../dashboard/blog/index.php?error=Some issues in updating.Try Again");
   }




}




if (($_SERVER['REQUEST_METHOD'] == 'POST')){

    if(isset($_POST['update'])){

        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            header("location:../../dashboard/blog/update.php?id=$id");
        }
    
     }else if (isset($_POST['delete'])){
        
            if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
                $id=$_GET['id'];
                deleteBlog($id);
            }
    }
    else if(isset($_POST['updateblog'])){
    
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            updateBlog($id);
        }
     }
}


 

?>