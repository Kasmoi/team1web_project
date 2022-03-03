<?php
include './incl/ihead.php';
include './incl/header.php';
require './func/indexdata.php';
?>

<!--Gallery-->
<div class="mcontainer pd-2-5"> 
          <!--Thumbnails-->
          <div class="gl-images">
          <?php $gdata=getGallery();
          if (empty($gdata)){
              echo "<h3>No Images Found</h3>";
              
        } else {
        // output data of each row
        $i = 1;
        while($grow = mysqli_fetch_assoc($gdata)) {
            ?>
            <a href="#img<?php echo $i;?>"><img class="gl-img" src="./uploads/gallery/<?php echo $grow["imgName"]?>" alt="gallery-image"></a>
          <!--LightBoxes-->
          <a href="#_" class="lightbox" id="img<?php echo $i;?>">
            <div>
               <img src="./uploads/gallery/<?php echo $grow["imgName"]?>" alt="gallery image"> 
            </div>
         </a>
         <?php
          $i++;
            }
         } 
         ?>
         </div>
        </div>


<!--Blog-->
<div class="mcontainer">
        <div class="blogs pd-2-5">
          <?php $bdata=getBlogs();
          if (empty($bdata)){
              echo "<h3>No Blogs Found</h3>";
              
        } else {
        // output data of each row
        
        while($brow = mysqli_fetch_assoc($bdata)) {
            ?>
          <article class="blg-article">
            <div class="blg-img">
              <img src="./uploads/blog/<?php echo $brow["imgName"]?>" alt="blog-image">
            </div>

            <div class="blg-txt">
              <h3><?php echo $brow["title"]?></h3>
               <div class="bcontent">
               <?php
                  $content = $brow["content"];
                  $start = strpos($content, '<p>');
                  $end = strpos($content, '</p>', $start);
                  $paragraph = substr($content, $start, $end-$start+4);
                  $paragraph = html_entity_decode($paragraph);
                  echo $paragraph;
               ?>
               </div>
               
            </div>

          </article>
          <?php } } ?>

        </div>
      </div>











<?php include './incl/footer.php'; ?>
