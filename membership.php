<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="./css_styles/membership.css" rel="stylesheet">
<link rel="stylesheet" href="css_styles/nav-footer.css">
<!--jquery -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!--Font Awesome-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
  <header>
      <div class="nav-wrapper">
        <div class="grad-bar"></div>
        <div class="container">
          <nav class="navbar">
            <a class="nav-brand" href="#"><img src="images/logo.png" alt="logo image"></a>
            <div class="menu-toggle" id="mobile-menu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>

            </div>
            <ul class="nav">
              <li class="nav-item">
                <a href = "index.html">Home</a>
              </li>
              <li class="nav-item">
                <a href = "membership.html">Membership</a>
              </li>
              <li class="nav-item">
                <a href = "trainers.html">Trainers</a>
              </li>
              <li class="nav-item">
                <a href = "contact.html">Contact Us</a>
              </li>
            </ul>
          </nav>
        </div>

      </div>


    </header>
    <div class="divider dvr-img-01 mtb-10">
      <div class="container ">
        <div class="heading pdtb-2-4">
          <p class="p-border">Memberships</p>
          <p class="txt-primary">From Us</p>
        </div>

      </div>

    </div>


<!--This is the headers ending.
 add page content inside of the div below -->
<div class="content container">

      <!--breadcrumb-->
  <div class="row"><div class="col-sm-12">
    <ul class="breadcrumb">
  <li><a href="./index.html">Home</a></li>
  <li>Membership</li>
</ul>
  </div></div>
  <!--main content of this page-->
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <div class="mem_desc">
      <h2>Memberships include:</h2>
      <p>-Access card to the gym so you can visit whenever you want</p>
      <p>-Free use of the swimming pool(otherwise pool access 10€/h)</p>
      <p>-Access the on site hygiene facilities(access cost without memebership 20€/one time)</p>
      </div>
        <div class="col-sm-3"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="membership">
        <h2>membership1</h2>
        <p>this is the description of
           this membership</p>
           <button type="button" name="button">buy this membership</button>
      </div>
      </div>
      <div class="col-sm-4">
        <div class="membership">
          <h2>membership2</h2>
          <p>this is the description of
             this membership</p>
             <button type="button" name="button">buy this membership</button>
        </div>
        </div>
        <div class="col-sm-4">
          <div class="membership">
            <h2>membership3</h2>
            <p>this is the description of
               this membership</p>
               <button type="button" name="button">buy this membership</button>
          </div>
          </div>


</div>
<div class="row">
  <div class="col-sm-4">
    <div class="membership">
      <h2>membership4</h2>
      <p>this is the description of
         this membership</p>
         <button type="button" name="button">buy this membership</button>
    </div>
    </div>
    <div class="col-sm-4">
      <div class="membership">
        <h2>membership5</h2>
        <p>this is the description of
           this membership</p>
           <button type="button" name="button">buy this membership</button>
      </div>
      </div>
      <div class="col-sm-4">
        <div class="membership">
          <h2>membership6</h2>
          <p>this is the description of
             this membership</p>
             <button type="button" name="button">buy this membership</button>
        </div>
        </div>


</div>
  </div>


<!--footer starts here-->
<?php include './incl/footer.php'; ?>
