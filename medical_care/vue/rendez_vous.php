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

<script type="text/javascript" src="assets/js/scripts.js"></script>  
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
                <li><a href="conListe_rdv.php">A propos nous </a></li>
              </ul>
            </div>
          
              <div class="row-sm-2 d-none d-lg-block appoint">
             
               <a class="button" href="index.php">
                Déconnecté
              </a> 
              <a  href="conprofile.php" onclick="getPatient()">
                 <img class="img1" alt="" src="assets/images/profile_icon.png">
                 Profile  
                
              </a>
            </div>
           
          </div>
            
          </div>
        </div>
      </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->

    <section id="contact_us" class="with-medical">
      <div class="container">
        <div class="col-sm-6 cop-ck">
          <h2>Rendez_vous</h2>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Date rendez_vous :</label></div>
            <div class="col-sm-8">
              <input
                type="date"
                placeholder="Enter Date rendez_vous"
                name="date"
                id="date"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Heure rendez_vous :</label></div>
            <div class="col-sm-8">
              <input
                type="time"
                name="name"
                id="heure"
                placeholder="Enter Heure rendez_vous"
                class="form-control input-sm"
              />
            </div>
          </div>
         

          <div class="row cf-ro">
            <div class="col-sm-3"><label></label></div>
            <div class="col-sm-8">
              <button class="btn btn-success btn-sm" onclick="ajout_rendez_vous(<?php echo $_SESSION['idpatient']; ?> )" >Enregistrer</button>
            </div>
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