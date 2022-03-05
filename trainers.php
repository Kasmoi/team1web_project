
<?php
include './incl/phead.php';
include './incl/header.php';
include ("./database/querybuilder.php");
$data = "select * from trainers";
//builds the query
$result=db_query($data);
?>

<!--This is the headers ending.
 add page content inside of the div below -->
<div class="content container" style="padding: 10px;">
  <div class="row"><div class="col-sm-12">
    <ul class="breadcrumb">
    <li><a href="./index.php">Home</a></li>
    <li>trainers</li>
    </ul>
  </div></div>
<div class="container">

  <?php
  if($result ->num_rows > 0) {
  //echo membership options
      while($row = $result ->fetch_assoc()){
  echo "<div class=\"row\">
          <div class=\"col-sm-6\">
          <div class=\"trainer_text\">
          <p>short description<br>".$row["description"]."</p>
          <p>Name: ".$row["name"]."</p>
          <p>Email: ".$row["email"]."</p>
          <button type=\"button\" class=\"btn btn-danger\">
              Contact
            </button>
          </div>
        </div>
        <div class=\"col-sm-6\">
        <img class=\"trainerpic\" src=\"".$row["imgName"]."\">
        </div></div>";
      }
  }
  else
  {
      echo "there are no trainers or something went wrong";
  }
  ?>
</div>
</div>

<!--footer starts here-->
<?php include './incl/footer.php'; ?>
