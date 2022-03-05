<?php
//database query builder
require '../../../database/querybuilder.php';

// check if the user has clicked button 
    
if (($_SERVER['REQUEST_METHOD'] == 'POST')){

    if(isset($_POST['addmembership'])){
        $title= $_POST['title'];
        $description= $_POST['description'];
        $price= $_POST['price'];
        if (empty($title) or empty($description) or empty($price)) {
            header("location:../../dashboard/membership/create.php/?error=Fields cannot be empty.All fields are required.");
        }else{
            $query="insert into memberships (title, description, price) values('$title', '$description', '$price')";
            //execute query to insert into memberships
            if(db_query($query)){
                header("location:../../dashboard/membership/?msg=New Membership Added Successfully"); 
            }else{
                $error = db_error();
                header("location:../../dashboard/membership/create.php/?error=$error");
            }
        }
}
}

