<?php
$title = "Fitness tips";
$activePage = "blogs";
include './incl/ihead.php';
include './incl/header.php';
require './func/blogdata.php';

?>
<!--Divider-->
<?php 
$bgclass = "dvr-bg-02";
$dtitle = "Fitness Tips";
include './incl/divider.php';
 ?>
<!--Blog-->
<div class="mcontainer">
        <div class="blogs pd-2-5">
          <?php $bdata=getAllBlogs($start,$perPage);
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

          <div class="pagination pd-2-5">
                <?php for($x=1;$x <= $pages;$x++){ ?>
                <a href="?page=<?php echo $x;?> & per-page=<?php echo $perPage;?>" class="<?php if ($page === $x ){ echo "active";}?>"><?php echo $x; ?> </a>
               <?php } ?>
        </div>

        </div>
      </div>
    


<?php include './incl/footer.php'; ?>