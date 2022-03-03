<body>

    <!---Navigation-->
    <header>
        <div class="nav-wrapper">
          <div class="grad-bar"></div>
          <div class="mcontainer">
            <nav class="navbar">
              <a class="nav-brand" href="#"><img src="./uploads/logo/logo.png" alt="logo image"></a>
              <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
    
              </div>
              <ul class="nav">
                <li class="nav-item">
                  <a href = "index.php" class="<?php if($activePage == "index"){echo "nactive";}else{echo " ";} ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a href = "membership.php" class="<?php if($activePage == "membership"){echo "nactive";}else{echo " ";} ?> ?>">Membership</a>
                </li>
                <li class="nav-item">
                  <a href = "trainers.php" class="<?php if($activePage == "trainers"){echo "nactive";}else{echo " ";} ?>">Trainers</a>
                </li>
                <li class="nav-item">
                  <a href = "blogs.php" class="<?php if($activePage == "blogs"){echo "nactive";}else{echo " ";} ?>">Fitness Tips</a>
                </li>
                <li class="nav-item">
                  <a href = "gallery.php" class="<?php if($activePage == "gallery"){echo "nactive";}else{echo " ";} ?>">Gallery</a>
                </li>
                <li class="nav-item">
                  <a href = "contact.php" class="<?php if($activePage == "contact"){echo "nactive";}else{echo " ";} ?>">Contact Us</a>
                </li>
              </ul>
            </nav>
          </div>
          
        </div>
  
      
      </header>
      <!--Navigation End-->