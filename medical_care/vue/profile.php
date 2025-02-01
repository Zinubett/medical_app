<?php
  session_start()  ;
   if (!empty ($_SESSION["log"])) {
$id=$_SESSION["idpatient"];

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
                 <img  class="img1" alt="" src="assets/images/profile_icon.png">
                 Profile  
                
              </a>
              
            </div>
           
          </div>
            
          </div>
        </div>
      </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->
<?php

require("model/connection.php");
 $connexion=connect_db();
 

    $id_patient= $_SESSION["idpatient"] ;              
    $sql="SELECT * FROM patient WHERE idpatient= '$id_patient'";

    $resultat=$connexion ->query($sql);
	
if($resultat->rowCount() > 0)
{
	while($row=$resultat->fetch(PDO::FETCH_ASSOC))
	{
		extract($row);
		?>
    <section id="contact_us" class="with-medical">
      <div class="container">
        <div class="col-sm-6 cop-ck">
          <h2>Profile</h2>
          

          <div class="row cf-ro">
            <div class="col-sm-3"><label>Nom patient: </label></div>
            <div class="col-sm-8" >
              <p id="nom"> <?php echo  $nom_pat ;  ?></p>
           
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Prenom patient: </label></div>
            <div class="col-sm-8">
              <p id="prenom"> <?php echo  $prenom_pat ;  ?></p>
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Email patient:  </label></div>
            <div class="col-sm-8">
              <p id="email"> <?php echo  $email_pat ;  ?></p>
           
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Date naissance: </label></div>
            <div class="col-sm-8">
               <p id="date"> <?php echo  $date_nais ;  ?></p>
         
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Num tel: </label></div>
            <div class="col-sm-8">
               <p id="tel"> <?php echo  $tel_pat ;  ?></p>   
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Sexe: </label></div>
            <div class="col-sm-8" >
               <p id="sexepat"> <?php echo  $sexe ;  ?></p>
            
            </div>
          </div>
  <?php       ?>
          <div class="row cf-ro">
            <div class="col-sm-3"><label></label></div>
            <div class="col-sm-8">
              <button class="btn btn-success btn-sm" onclick="get_profile(<?php echo $_SESSION['idpatient']; ?>)"  >Modifier</button>
            </div>

          </div>
        </div>
      </div>
    </section>
<?php
	}
}
else
{
	?>
	<div class="col-xs-12">
		<div class="alert alert-warning">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp; No Data Found.
		</div>
	</div>
	<?php
}
?>
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
  <div class="modal" id="profile" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modifier profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <h2>Profile</h2>
         
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Nom patient</label></div>
            <div class="col-sm-8">
              <input
                type="text"
                id="nomp"
                name="name"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Prenom patient:</label></div>
            <div class="col-sm-8">
              <input
                type="text"
                name="name"
                id="prenomp"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Email</label></div>
            <div class="col-sm-8">
              <input
                type="email"
                name="email"
                id="emailpt"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Date naissance</label></div>
            <div class="col-sm-8">
              <input
                type="date"
                name="name"
                id="date_nais_pt"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Num tel</label></div>
            <div class="col-sm-8">
              <input
                type="text"
                name="name"
                id="tel_pt"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cf-ro">
            <div class="col-sm-3"><label>Sexe</label></div>
            <div class="col-sm-8">
              <input
                type="text"
                name="name"
                id="sexe_pt"
                class="form-control input-sm"
              />
            </div>
          </div>
 
     
      <div class="modal-footer">
         <input type="hidden" id="id_patient_hidden">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="editProfile(<?php echo $_SESSION['idpatient']; ?>)" >Save changes</button>
      </div>
    </div>
  </div>
</div>
</html>
<?php
   }

   else {
      header('Location: index.php');
  
    }



?>