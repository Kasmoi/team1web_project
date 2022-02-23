<?php
require '../../../database/querybuilder.php';


function selectData(){
        $query = "select * from sliders order by sliderID DESC;";
        $data = db_query($query);
        if($data == false){
            echo "Database Errors".db_error();

        }else{
            
            if(mysqli_num_rows($data) > 0) {
                return $data;
              } 
        }
}


    

?>