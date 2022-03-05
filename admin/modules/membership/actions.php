<?php
//database query builder
require '../../../database/querybuilder.php';

if (($_SERVER['REQUEST_METHOD'] == 'POST')){
    //check if user clicked update button
    if(isset($_POST['update'])){
        //check if id is set in url and is a number
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            //get id from url
            $id=$_GET['id'];
            //redirect to update form with id on url
            header("location:../../dashboard/membership/update.php?id=$id");
        }
    
     }
     //check if user clicked delete button 
     elseif(isset($_POST['delete'])){
        //check if id is set in url
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            //get id from the url
            $id=$_GET['id'];
            //sql to delete the data
            $query="delete from memberships where membershipID='$id'";
            //execute query if success
            if(db_query($query)){
                //redirect to membership page with success message
                header("location:../../dashboard/membership/?msg= Membership Deleted Successfully"); 
            //if query fails to execute
            }else{
                //redirect to membership page with error message
                header("location:../../dashboard/membership/?error= Unable To Delete.Try Again");
            }
            
        }
     }
     //check if user clicked updatemembership button
     elseif(isset($_POST['updatemembership'])){
    
        if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            //get data from the form
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            
            //checks if input fields are empty redirect to update form with error message
            if (empty($title) or empty($description) or empty($price)) {
                header("location:../../dashboard/membership/update.php/?id=$id & error=Fields cannot be empty.All fields are required.");
            }else{
                //update query
                $query = "update memberships set title='$title',description='$description',price='$price' where membershipID='$id'";
                //execute query if executed redirects to membership page with success message
                if(db_query($query)){
                    header("location:../../dashboard/membership/?msg= Membership Updated Successfully"); 
                    
                }else{
                    $error = db_error();
                    header("location:../../dashboard/membership/update.php/?id=$id & error=$error");
                }
            }    
            
            
            
        }
     }
}

?>