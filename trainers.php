
<?php
$title = "Trainers";
$activePage = "trainers";
include './incl/ihead.php';
include './incl/header.php';
include ("./database/querybuilder.php");
$query = "select * from trainers";
//builds the query
$tdata=db_select($query);
$bgclass = "dvr-bg-01";
$dtitle = "Meet Trainers";
include './incl/divider.php';
?>

<div class="mcontainer pd-2-5">
<div class="tcontent">
<?php 
          if (empty($tdata)){
              echo "<h3>No Trainers Data To Display </h3>";
              
        } else {
        // output data of each row
        while($trow = mysqli_fetch_assoc($tdata)){
            ?>
  <div class="tinfo">
      <div class="img">
      <img class="timg" src="./uploads/trainer/<?php echo $trow["imgName"]?>" alt="trainer-image" >
      </div>
      <div class="txtinfo">
      <h3><?php echo $trow['name'];?></h3>
      <?php echo html_entity_decode($trow['description']); ?>
      <p><strong> Email: </strong> <?php echo $trow['email'];?> </p>
      <button class="mbtn">Contact</button></h3>
      </div>
      
  </div>
<?php }} ?>
</div>
</div>

  

<!--footer starts here-->
<?php include './incl/footer.php'; ?>
