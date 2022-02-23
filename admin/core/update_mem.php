<?php
    $title = "Admin view update";
    require("./inc/head.php");
    require("./inc/header.php");
    require("./inc/sidebar.php");
    require ("../Database/querybuilder.php");
    $a = $_GET['membershipID'];
    $data="Select from Membership WHERE membershipID=".$a."";
    $result = db_query($data);
    $row= mysqli_fetch_array($result);
?>
<h1>Update membership</h1>
<form method="post" action="./update_mem.php">
Title: <br>
<input type="text" name="mem_title"  value="<?php echo $row['title']; ?>">
<br>
Description:<br>
<input type="text" name="description" value="<?php echo $row['description']; ?>">
<br>
price<br>
<input type="text" name="price" value="<?php echo $row['price']; ?>">
<br>
<input type="submit" name="submit" value="Submit" >
</form>
<?php
if(isset($_POST['submit'])){
    # it now updates only fname, your task is to update all other fields in your team
    $mem_title = $_POST['mem_title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $data1 = "Update membership set title=".$mem_title.",description=".$description.",price=".$price." where id=".$a."");
    db_query($data1);
    header("location: ../view_membership.php");
?>
<?php require("../inc/footer.php");?>
<script type="text/javascript" src="./assets/js/sidebar.js"></script>
</body>
</html>
