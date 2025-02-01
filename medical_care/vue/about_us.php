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
                 <img class="img1"alt="" src="assets/images/profile_icon.png">
                 Profile  
                
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="about_us" class="with-medical">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <img class="img2" src="assets/images/why.jpg" alt="" />
          </div>
          <div class="col-lg-6 col-md-12 txtr">
            <h4>
              Pourquoi choisir les soins de santé avec <br />
              <span>Medical Hospital</span>
            </h4>
            <p>
              La Clinique Médicale de Peaple Care est composée d'une équipe
              professionnelle, qualifiée et dévouée au maintien de la santé de
              sa clientèle. Notre mission est d'améliorer le bien-être de la
              population en assurant l'accessibilité, la continuité et la
              qualité des services de santé en favorisant la prévention et la
              collaboration interdisciplinaire.
            </p>
            <p>Des soins de qualité sont offerts dont:</p>
            <ul>
              <li>- Le suivi médical sur rendez-vous (prise en charge);</li>
              <li>
                - Rendez-vous rapides/mini-urgence pour des problèmes de santé
                aigus;
              </li>
              <li>
                - Le suivi conjoint entre l'infirmière et le médecin pour
                plusieurs conditions chroniques.
              </li>
            </ul>
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