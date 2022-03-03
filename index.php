<?php
$title = "Gym One";
$activePage = "index";
include './incl/ihead.php';
include './incl/header.php';
require './func/indexdata.php';

?>
 <!--Slide Show-->
 <div class="slider">
      <!-- fade css -->
      <?php $sdata=getSliders();
          if (empty($sdata)){
              echo "<h3>No Sliders Found</h3>";
              
        } else {
        // output data of each row
        while($srow = mysqli_fetch_assoc($sdata)) {
             $pBorderText = explode('</p>',trim($srow["sliderText"]))[0];
             $hFirstLine = explode('</p>',trim($srow["sliderText"]))[1];
             $hSecondLine = explode('</p>',trim($srow["sliderText"]))[2];
            ?>
      <div class="myslide fade">
        <div class="txt">
          <p class="p-border"><?php echo html_entity_decode(strip_tags($pBorderText)); ?></p>
          <h1> <span class="txt-primary"><?php echo html_entity_decode(strip_tags($hFirstLine)); ?></span>
            <br><?php echo html_entity_decode(strip_tags($hSecondLine)); ?></h1>
        </div>
        <img src="./uploads/slider/<?php echo $srow['imgName']?>" alt="slider image" style="width: 100%; height: 100%;">
      </div>
      <?php } } ?>
      <!-- /fade css -->
      
      
       <!-- /onclick js -->
      <div class="dotsbox" style="text-align:center">
        <?php for($x=1;$x <= mysqli_num_rows($sdata);$x++){ ?>
        <span class="dot" onclick="currentSlide(<?php echo $x;?>)"></span>
        <?php } ?>  
      </div>
     
    </div>
    <!---About -->
    <div class="wrapper">
        <div class="mcontainer">
          <div class="about">
            <div class="abt-txt pdtb-2-4 ">
              <h2 class="p-border txt-primary">About Gym</h2>
                <p class="pdl wlcm-txt">Welcome to <span class="txt-primary">Us</span></p>
                <p class="pdl txt-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. Magna eget est lorem ipsum dolor
                   sit amet consectetur adipiscing. Sit amet volutpat consequat mauris.</p>

                <p class="pdl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. Magna eget est lorem ipsum dolor
                   sit amet consectetur adipiscing. Sit amet volutpat consequat mauris.</p>
                <button class="btn">GET FIT</button>
            </div>
            <div class="abt-img pd-2-5">
                <img src="./uploads/about/about-image.jpg" alt="about image">
            </div>

          </div>
          
          <div class="service pd-2-5">
            <div class="service-item" >
              <div class="item-img sbg-1"></div>
                <p>Personal Trainer</p>
            </div>
            <div class="service-item">
              <div class="item-img sbg-2"></div>
                <p>Cycling room</p>
            </div>
            <div class="service-item">
              <div class="item-img sbg-3"></div>
                <p>Fitness Class</p>
            </div>

          </div>
        </div>

      </div>
<!--Divider-->
<?php 
$bgclass = "dvr-bg-01";
$dtitle = "Happy Hours";
include './incl/divider.php';
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
<!--Divider-->
<?php 
$bgclass = "dvr-bg-02";
$dtitle = "Fitness Tips";
include './incl/divider.php';
 ?>
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
               <a class="readmore" href="blog-post.php?id=<?php echo $brow["blogID"]?>">
               ReadMore </a>
               </div>
               
            </div>

          </article>
          <?php } } ?>

          
        </div>
        <div class="viewmore" style="padding-bottom: 5px;">
          <a href="blogs.php"> View More </a>
        </div>
        
      </div>











<?php include './incl/footer.php'; ?>
