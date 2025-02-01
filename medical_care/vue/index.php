<?php
  session_start()  ;
   if (!empty ($_SESSION["log"])) {


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>People care</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css" />
    <link
      rel="stylesheet"
      href="assets/plugins/slider/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/plugins/slider/css/owl.theme.default.css"
    />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  
<script type="text/javascript" src="js/script.js"></script>
</head>

  <body>
    <!-- ################# Header Starts Here#######################--->
    <header id="menu-jk">
      <div id="nav-head" class="header-nav">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
              <img class="img2" src="assets/images/logo.jpg" alt="" />
              <a data-toggle="collapse" data-target="#menu" href="#menu"
                ><i class="fas d-block d-md-none small-menu fa-bars"></i
              ></a>
            </div>
           <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
              <ul>
                <li><a href="conindex.php">Home</a></li>
                <li><a href="conListe_rdv.php">Liste rendez_vous</a></li>
                <li><a href="conAbout_us.php">A propos nous </a></li>
              </ul>
            </div>
          <div class="row-sm-2 d-none d-lg-block appoint">
             
               <a class="button" href="index.php">
                Déconnecté
              </a> 
              <a  href="conprofile.php" onclick="getPatient()">
                 <img class="img1"  alt="" src="assets/images/profile_icon.png">
                 Profile  
                
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->

    <!--***************************** Slider Starts Here *****************************-->
      <div class="slider container-fluid">
      <ul id="slider">
        <li data-active="1" data-background="assets/images/slider/slider_1.jpg">
          <div class="slider-layer">
            <div class="container">
              <h1 class="animated slideInDown">
                Vous êtes au bon endroit <br />
                Au bon moment.
              </h1> <div class="buttn-row animated zoomInLeft">
                <a class="btn" href="conRendez_vous.php">Ajout rendez_vous </a>
               
              </div>
            </div>
          </div>
        </li>
        <li data-active="0" data-background="assets/images/slider/slider_1.jpg">
          <div class="slider-layer">
            <div class="container">
              <h1 class="animated slideInDown">
                Prenez-vous rendez-vous médical en ligne<br />
              </h1>
              <div class="buttn-row animated zoomInLeft">
                <a class="btn" href="conRendez_vous.php">Ajout rendez_vous </a>
               
              </div>
            </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!--########## Slider Ends Here ##########-->

    <section id="about_us" class="with-medical">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <img class="img2" src="assets/images/why.jpg" alt="" />
          </div>
          <div class="col-lg-6 col-md-12 txtr">
            <h4>
              Why choos Health Care with <br />
              <span>Medical Hospital</span>
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
              neque libero, pulvinar et elementum quis, facilisis eu ante.
              Mauris non placerat sapien. Pellentesque tempor arcu non odio
              scelerisque ullamcorper. Lorem ipsum dolor sit amet, consectetur
              adipiscing elit. Nam varius eros consequat auctor gravida. Fusce
              tristique lacus at urna sollicitudin pulvinar. Suspendisse
              hendrerit ultrices mauris.
            </p>
            <p>
              Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus
              et magnis dis parturient montes, nascetur ridiculus mus. Sed porta
              dolor quis felis pulvinar dignissim. Etiam nisl ligula,
              ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex
              ullamcorper, scelerisque lacus nec, commodo dui. Proin massa urna,
              volutpat vel augue eget, iaculis tristique dui.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ################# Footer Starts Here#######################--->

    <footer class="footer"></footer>
    <div class="copy">
      <div class="container">
        <a href="https://www.smarteyeapps.com/"
          >2024 &copy; All Rights Reserved | Designed and Developed by Ines
          Mlayeh</a
        >
      </div>
    </div>
  </body>

  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
  <script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
  <script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
  <script src="assets/js/script.js"></script>
</html>
<?php
   }

   else {
      header('Location: index.php');
  
    }



?>