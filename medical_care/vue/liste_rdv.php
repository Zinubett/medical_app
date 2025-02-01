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
                <li><a href="conAbout_us.php">A propos nous </a></li>
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
<section class="with-medical">
   <section id="main-content">
      <section class="wrapper">
        <div class="row">
         <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Liste des rendez_vous</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="bi bi-calendar-check"></i>Date rdv</th>
                    <th class="hidden-phone"><i class="bi bi-hourglass"></i> Heure rdv</th>
                      <th><i class="bi bi-bookmark-check"></i>Etat rdv</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                 
                 <?php foreach ($rdv as $m_rdv)  :     ?>
          <tr data-expanded="true">
            
           <td><?php echo  $m_rdv['date_rdv'] ;  ?></td>
            <td><?php echo  $m_rdv['heure_rdv'] ;  ?></td>
          <td><?php echo  $m_rdv['etat_rdv'] ;  ?></td>
           
             
                  </tr>
                  <?php  endforeach ;    ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
         
        </div>
        <!-- /row -->
      </section>
    </section>
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