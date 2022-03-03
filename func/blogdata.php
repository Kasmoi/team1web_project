<?php
require "./database/querybuilder.php";

function getDataById($id){
    $query = "select * from blogs where blogID=".$id;
    $data = db_select_by_id($query);
    return $data;
    }

    $page = isset($_GET['page']) ? (int)$_GET['page']:1;
    $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 9 ? (int)$_GET['per-page']:6;
    //positioning
    $start = ($page > 1) ? ($page * $perPage)-$perPage : 0;
    //Pages
    $result = db_query("select count(*) as total from blogs;");
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    $pages =  ceil($total/$perPage);

    function getAllBlogs($start,$perPage){
        $query = "select * from blogs order by blogID DESC limit $start,$perPage;";
        $data = db_select($query);
        return $data;
    }

?>