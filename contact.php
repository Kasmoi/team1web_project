<?php
include './incl/header.php';
include './incl/phead.php';
$msg="";
?>
<link rel="stylesheet" href="./css/contact.css">
<div class="content container">
  <div class="row"><div class="col-sm-12">
    <ul class="breadcrumb">
  <li><a href="./index.html">Home</a></li>
  <li>Contact</li>
  </ul>
  </div></div>
  <div class="row">
    <div class="col-sm-6">
      <!--form sends an email to kasmirxmoilanen@gmail.com-->
      <form action="./contact_mail.php">

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your name.." required></input><br>

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Your last name.." required></input><br>

          <label for="email" >email</label>
          <input type="email" id="lname" name="email" placeholder="Your email.." required></input><br>

          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea><br>

          <input type="submit" value="Submit"></input>

        </form>
        <p class="msg">
            <?php
                if (isset($_GET['error'])) {
                $msg= $_GET['error'];
                echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$msg;
                }
            ?>
        </p>
  </div>
  <div class="col-sm-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1935.766128253214!2d24.477566743130506!3d60.97596248951437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5d7f1a184209%3A0xe69734d5c10042bd!2sH%C3%A4meen%20ammattikorkeakoulu%20(HAMK)%2C%20H%C3%A4meenlinnan%20korkeakoulukeskus!5e0!3m2!1sfi!2sfi!4v1644996895199!5m2!1sfi!2sfi" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
  </div>
  <?php
  include './incl/footer.php';
  ?>
