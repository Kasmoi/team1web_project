<?php
   require '../../database/querybuilder.php';
   include '../utils/validate.php';
    function createSlider(){
        $slider_txt = $_POST["slidertext"];
        $file_name = $_FILES["choosefile"]["name"];
        $extensions= array("jpeg","jpg","png");
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $temp_name = $_FILES["choosefile"]["tmp_name"];
     
        $folder = "/var/www/html/team1web_project/uploads/slider/".$file_name;

        // Validate slider text or file input to check if is not empty
        if (empty($slider_txt) || empty($file_name)){
            header("location:../slider/create.php?error=Slider text and image can't be empty");
    
       //// Validate file input to check if is with valid extension
        } else if (!in_array($file_ext,$extensions)) {
            header("location:../slider/create.php?error=Upload valiid images. Only PNG and JPEG are allowed.");
        //checks if image with same name exits
        } else if (file_exists($folder)) {
            header("location:../slider/create.php?error=Image with same name already exists");
        //// Validate image file size
        } else if (filesize($temp_name) > 2097152) {
            header("location:../slider/create.php?error=Image is too large, Upload less than or equal 2MB.");    
        } else {
    
            
    
            // if the image is uploaded to the "given" folder" 
    
            if (move_uploaded_file($temp_name, $folder)) {
                
                // query to insert the name of the image to database
    
                $sql = "insert into sliders(sliderText,imgName) VALUES ('$slider_txt','$file_name')";

                //query to the database
                db_query($sql);
    
                header("location:../slider/index.php?msg=New Slider Added Successfully");
    
            }else {
                header("location:../slider/create.php?error=Problem in adding slider.Try again");
            }       
                    
        
    }
    
    }
    
    function selectData(){
        $query = "select * from sliders order by sliderId DESC;";
        $data = db_query($query);
        if($data == false){
            echo "Database Errors".db_error();

        }else{
            
            if(mysqli_num_rows($data) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($data)) {
                    echo "<tr>";
                    echo "<td>".$row["sliderText"]."</td>";
                   echo "<td><img width=\"300\" height=\"150\" src=\"/team1web_project/uploads/slider/".$row["imgName"]."\"></td>";
                   echo "<td>
                        <form method = \"POST\" action=\"../core/slider.php?id=".$row['sliderID']."\" >
                        <input class=\"btn btn-prim\" type = \"submit\" name=\"update\" value=\"Update\"/>
                        <input class=\"btn btn-danger\" type = \"submit\" name=\"delete\" value=\"Delete\"/>
                        </form>
                        </td>";
                   echo "</tr>";
                }
              } else {
                echo "<tr>No data found</tr>";
              }
        }
    }

        function getDataById($id){
            $query = "select * from sliders where sliderId=".$id;
            $data = db_query($query);
            if(mysqli_num_rows($data) === 1) {
                return $data;
            }

        }

        function deleteSlider($id){
                $data=getDataById($id);
                $row = mysqli_fetch_assoc($data);

                $imgPath = "/var/www/html/team1web_project/uploads/slider/".$row['imgName'];
                $query = "delete from sliders where sliderId=".$row['sliderID'];
                if(db_query($query)){

                    if(unlink($imgPath) ){
                        header("location:../slider/index.php?msg= Slider Deleted Successfully");
                        exit();
                    }
                }else {
                    header("location:../slider/index.php?error= Unable to Delete"); 
                }
        
            }


        
       
         // check if the user has clicked button 
    
    if (($_SERVER['REQUEST_METHOD'] == 'POST')){

        if(isset($_POST['create'])){
            createSlider();

         }
        elseif(isset($_POST['update'])){

            if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
                $id=$_GET['id'];
                header("location:../slider/update.php?id=$id");
            }

         }
         elseif(isset($_POST['delete'])){
            
            if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
                $id=$_GET['id'];
                deleteSlider($id);
            }
         }

    }
     
    
            
       
    
    ?>

