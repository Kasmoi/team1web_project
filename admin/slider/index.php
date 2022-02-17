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
        <a href="create.php"><button class=" btn addnew"> NEW SLIDER </button></a>
    </div>
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