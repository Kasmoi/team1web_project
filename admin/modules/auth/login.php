<?php
require '../../../database/querybuilder.php';
include '../../utils/validate.php';
#echo password_hash("admin",PASSWORD_DEFAULT);

function login(){

    $username = validate_input($_POST['username']);
    $password = validate_input($_POST['password']);

    if(empty($username)  || empty($password)){
        header("location:../../index.php?error=Username and Password cannot be empty");
        exit();
    }else{
        $query="select * from admin where username = '$username'";
        $data = db_query($query);
        if(mysqli_num_rows($data) === 1){
            while($row = mysqli_fetch_assoc($data)){
                if(password_verify($password,$row['password'])){
                    session_start();
                    $_SESSION['loggedin'] = True;
                    $_SESSION['username'] = $username;
                    header("location:../../dashboard/main/");
                }else{
                    header("location:../../index.php?error=Invalid username or password");
                }
            }

        }else{
            header("location:../../index.php?error=Invalid username or password");
        }

    }

    }

if($_SERVER["REQUEST_METHOD"] == "POST"){
    login();
}
?>
