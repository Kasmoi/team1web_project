<?php
    $title = "Admin membership create";
    require("./inc/head.php");
    require("./inc/header.php");
    require("./inc/sidebar.php");
    require ("../Database/querybuilder.php");
 ?>

<main>
  <form name="create_membership" method="post" action="./core/create_mem.php">
  Title: <input type="text" name="mem_title"> <br>
  Description: <input type="text" name="description"> <br>
  Price<input type="number" name="city"> <br>

  <br>
  <input type="submit" value="add new membership">
  </form>
</main>
<?php require("./inc/footer.php");?>
<script type="text/javascript" src="./assets/js/sidebar.js"></script>
</body>
</html>
