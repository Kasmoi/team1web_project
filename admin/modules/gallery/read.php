<?php
require '../../../database/querybuilder.php';


$page = isset($_GET['page']) ? (int)$_GET['page']:1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 9 ? (int)$_GET['per-page']:6;
//positioning
$start = ($page > 1) ? ($page * $perPage)-$perPage : 0;
//Pages
$result = db_query("select count(*) as total from gallery;");
$row = mysqli_fetch_assoc($result);
$total = $row['total'];
$pages =  ceil($total/$perPage);

function getAllData($start,$perPage){
    $query = "select * from gallery order by imgID desc limit $start,$perPage;";
    $data = db_select($query);
    return $data;
}
?>