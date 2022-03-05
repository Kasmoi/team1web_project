<?php
$title = "Memberships";
$activePage = "membership";
include './incl/ihead.php';
include './incl/header.php';

include ("./database/querybuilder.php");
$query = "select * from memberships";
//builds the query
$mdata=db_select($query);
//header
$bgclass = "dvr-bg-01";
$dtitle = "Membership Options";
include './incl/divider.php';
?>
<div class="row"><div class="col-sm-12">
  <ul class="breadcrumb">
<li><a href="./index.php">Home</a></li>
<li>Contact</li>
</ul>
</div></div>
<div class="mcontainer pd-2-5">
  <div class="mwrapper">
    <div class="moptions">
      <?php
          if (empty($mdata)){
              echo "<h3>No Membership Data To Display </h3>";

        } else {
        // output data of each row
        while($mrow = mysqli_fetch_assoc($mdata)){
            ?>
      <div class="mcontent">
          <h3><?php echo $mrow['title'];?></h3>
          <?php echo html_entity_decode($mrow['description']); ?>
          <p>Starts from <strong> £ <?php echo $mrow['price'];?></strong> </p>
          <button class="mbtn">Join Now</button>
      </div>
      <?php } } ?>
    </div>
    <div class="mbenefits">
      <h3>Memberships include:</h3>
      <p>-Access card to the gym </p>
      <p>-Free use of the swimming pool</p>
      <p>-Access to sauna and other facility</p>
      <p>-Personal Trainer</p>
    </div>
  </div>
</div>
<!--footer starts here-->
<?php include './incl/footer.php'; ?>
