<?php
    $title = "Admin view membership";
    require("./inc/head.php");
    require("./inc/header.php");
    require("./inc/sidebar.php");
    require ("../Database/querybuilder.php");
    $data = "select * from membership";
    $result=db_query($data);
    echo "<h2>add new memberships</h2>";
    echo "<a href=\"./create_membership.php\">add a membership</a>";
if($result ->num_rows > 0) {
  //echo table headers
echo "<table class=\"table\"><tr><th>ID</th><th>Title</th><th>Description</th><th>price</th></tr>";
//get rows and make an array
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["membershipID"] . "</td><td>". $row["title"]."</td> <td>". $row["description"]
        ."</td><td>". $row["price"]. "</td>
        <td><a href=\"./update_mem.php?id=$row['membershipID'];\">Update</a></td>
        <td><a href=\"./core/delete_mem.php?id=$row['membershipID'];\">Delete</a></td></tr>";
    }
    echo "</table>";
}
else
{
    echo "something went wrong";
}


$conn->close();
?>
<?php require("./inc/footer.php");?>
<script type="text/javascript" src="./assets/js/sidebar.js"></script>
</body>
</html>
