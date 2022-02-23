<?php 
    $title = "Sliders";
    require("../inc/head.php");
    require("../inc/header.php");
    require("../inc/sidebar.php");
    require("../core/slider.php")
 ?>

<main>
    <div class = "pg-m">
        <h1 class="pg-heading"><i class="fa-solid fa-sliders"></i> Sliders</h1>
        <a href="create.php"><button class=" btn addnew btn-prim"> NEW SLIDER </button></a>
    </div>
    <?php 
    
    if (isset($_GET['msg'])) { 
        echo '<div class="msg">';
        $msg= $_GET['msg'];
        echo '<i class="fa-solid fa-check"></i> '.$msg;
        echo '</div>';
    }
    ?>
<div class = 'datatable'> 
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Slider Text</th>
            <th>Slider Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php selectData(); ?>
    </tbody>
</table>
    
</div>

    
</main>
<?php require("../inc/footer.php");?>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable( {
        "searching":false,

    }
       
    );
} );
</script>

</body>
</html>