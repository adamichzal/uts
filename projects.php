<!DOCTYPE html>
<html lang="en">
<?php include("function.php"); ?>

  <head>
  <?php
        $menu = ambil_menu();
        $project1 = ambil_asset("project1");
        $project2 = ambil_asset("project2");
        $project3 = ambil_asset("project3");
        $descAboutMe = ambil_text("descaboutme");
        $email = ambil_text("email");
        $noHp = ambil_text("nohp");
        $linkedin = ambil_text("Linkedin");
        $journey1 = ambil_text("journey1");
        $journey2 = ambil_text("journey2");
        $projects = ambil_text("projects");
        $language = ambil_text("language");
        $stacks = ambil_text("stacks");
        $company = ambil_text("company");
        $alamat = ambil_text("alamat");
        $gmaps = ambil_text("gmaps");
        $iframe = ambil_text("iframe");
        $jobImmobi = ambil_text("jobimmobi");
        $jobJatis = ambil_text("jobjatis");
        $linkCaready = ambil_text("linkcaready");
        $linkAstrapay = ambil_text("linkastrapay");
        $linkXprivate = ambil_text("linkxprivate");
        ?>  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Adam's Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
<div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><i class="fa fa-envelope"></i><?php echo $email?></li>
              <li><i class="fa fa-phone"></i><?php echo $noHp?></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href=<?php echo $linkedin?>><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href=<?php echo $menu[0]['dir']?>><h2>Blog <em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href=<?php echo $menu[0]['dir']?>>Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=<?php echo $menu[1]['dir']?>>Experience</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href=<?php echo $menu[2]['dir']?>>About Me</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href=<?php echo $menu[3]['dir']?>>Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=<?php echo $menu[4]['dir']?>>Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=<?php echo $menu[5]['dir']?>>Stacks</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Projects</h1>
            <span>My Successfull Projects</span>
          </div>
        </div>
      </div>
    </div>

    <div class="team" style="margin: 0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>My Successfull <em>Projects</em></h2>
              <span>as a Backend Developer</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src=<?php echo $project1?> alt="">
              <div class="down-content">
                <h4>CAReady</h4>
                <span>Biggest Online Auction in Indonesia</span>
                <p>Websites for vehicle Auction</p>

                <p>
                  <a href=<?php echo $linkCaready?>>Visit CAReady Website</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src=<?php echo $project2?> alt="">
              <div class="down-content">
                <h4>AstraPay</h4>
                <span>E-Wallet From Astra Groups</span>
                <p>E-Wallet for make customer astra easy to pay anything in online</p>
                <p>
                  <a href=<?php echo $linkAstrapay?>>Visit AstraPay Website</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src=<?php echo $project3?> alt="">
              <div class="down-content">
                <h4>XPrivate</h4>
                <span>Education Website for private learning</span>
                <p>Webstites for student and teacher meet and learn together online or offlane</p>
                <p>
                  <a href=<?php echo $linkXprivate?>>Visit XPrivate Website</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
          <h4>Blog Website</h4>
            <ul class="social-icons">
              <li><a href=<?php echo $linkedin?>><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href=<?php echo $menu[0]['dir']?>>Home</a></li>
              <li><a href=<?php echo $menu[2]['dir']?>>About Me</a></li>
              <li><a href=<?php echo $menu[1]['dir']?>>Blog</a></li>
              <li><a href=<?php echo $menu[4]['dir']?>>Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>