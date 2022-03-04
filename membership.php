<?php
include './incl/phead.php';
include './incl/header.php';

include ("./database/querybuilder.php");
$data = "select * from membership";
//builds the query
$result=db_query($data);
?>
<!--This is the headers ending.
 add page content inside of the div below -->
<div class="content container">

      <!--breadcrumb-->
  <div class="row"><div class="col-sm-12">
    <ul class="breadcrumb">
  <li><a href="./index.php">Home</a></li>
  <li>Membership</li>
</ul>
  </div></div>
  <!--main content of this page-->
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <div class="mem_desc">
      <h2>Memberships include:</h2>
      <p>-Access card to the gym so you can visit whenever you want</p>
      <p>-Free use of the swimming pool(otherwise pool access 10€/h)</p>
      <p>-Access the on site hygiene facilities(access cost without memebership 20€/one time)</p>
      </div>
        <div class="col-sm-3"></div>
    </div>
  </div>
  <div class="row">
    <?php
    if($result ->num_rows > 0) {
    //echo membership options
        while($row = $result ->fetch_assoc()){
    echo "<div class=\"col-sm-4\">
            <div class=\"membership\">
            <h2>".$row["title"]."</h2>
            <p>".$row["description"]."</p>
            <button type=\"button\" name=\"button\"> buy for".$row["price"]."€</button>
            </div>
          </div>";
        }
    }
    else
    {
        echo "there are no memberships or something went wrong";
    }
    ?>
</div>




</div>


<!--footer starts here-->
<?php include './incl/footer.php'; ?>
