<?php
require '../../../database/querybuilder.php';

function getAllData(){
    $query = "select * from blogs order by blogID DESC;";
    $data = db_select($query);
    return $data;
}

function getDataById($id){
$query = "select * from blogs where blogID=".$id;
$data = db_select_by_id($query);
return $data;
}
?>