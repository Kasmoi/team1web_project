<?php
require '../../../database/querybuilder.php';


function getAllData(){
        $query = "select * from sliders order by sliderID DESC;";
        $data = db_select($query);
        return $data;
}

function getDataById($id){
    $query = "select * from sliders where sliderId=".$id;
    $data = db_select_by_id($query);
    return $data;
    }




    

?>