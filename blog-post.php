<?php
require './func/blogdata.php';
if(isset($_GET['id'])  &&  is_numeric($_GET['id'])) {
    $id=$_GET['id'];
    $data=getDataById($id);
    $row = mysqli_fetch_assoc($data);

}
$title = $row["title"];
include './incl/ihead.php';
include './incl/header.php';
?>
<div class="mcontainer pd-2-5 post">
 <div class="posttitle">
     <h2><?php echo $row["title"];?></h2></div>
 <div class="blg-img">
     <img src="./uploads/blog/<?php echo $row['imgName']; ?>" alt="post-image">
 </div>
 <div class="postcontent">
 <?php echo html_entity_decode($row["content"]) ?>
 </div>
</div>

<?php include './incl/footer.php'; ?>