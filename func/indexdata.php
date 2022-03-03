<?php
require "./database/querybuilder.php";
function getGallery(){
        $query = "select * from gallery order by imgID desc limit 6;";
        $data = db_select($query);
        return $data;
    }
function getBlogs(){
    $query = "select * from blogs order by blogID DESC limit 2;";
    $data = db_select($query);
    return $data;
}

function getSliders(){
    $query = "select * from sliders order by sliderID DESC limit 3;";
    $data = db_select($query);
    return $data;
}

?>