<?php 
    $title = "Admin Login";
    require("./inc/head.php");
    $errorMsg = " ";
 ?>
<form action="./core/login.php" method="post">
        <div class="login-box">
            <h1>Admin Login</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
            
            <input class="button" type="submit"
                     name="login" value="Sign In">

                <p class="errorMsg">
                    <?php 
                        if (isset($_GET['error'])) { 
                        $errorMsg= $_GET['error'];
                        echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg;
                        }
                    ?> 
                </p>     
        </div>
    </form> 
    
</body>
</html>