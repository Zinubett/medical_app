<?php
  session_start()  ;
   if (!empty ($_SESSION["log"])) {



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Espace medecin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>Médical<span>CARE</span></b></a>
      <!--logo end-->
      
       <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../index.php">Logout</a></li>
        </ul>
      </div>
     
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION["nom"]; ?></h5>
          <li class="mt">
            <a class="active" href="conacceuil.php">
              <i class="fa fa-dashboard"></i>
              <span>Acceuil</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Liste des patients</span>
              </a>
            <ul class="sub">
               <li><a href="conlistepatient.php">Liste patient </a></li>
             <li><a href="conlisteRDV.php">Liste rendez_vous</a></li>
            </ul>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
           <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Liste de rendez_vous</h4>
                <hr>
                <thead>
                  <tr>
                     <th><i class=" fa fa-edit"></i>id_rdv </th>
                    <th><i class="fa fa-bullhorn"></i>id_pat</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> date_rdv</th>
                    <th><i class="fa fa-bookmark"></i>heure_rdv</th>
                    
                     <th><i class="fa fa-bookmark"></i>Etat_rdv</th>
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                 
                 <?php foreach ($rdv as $me)  :     ?>
          <tr data-expanded="true">
            
            <td><?php echo  $me['id_rdv'] ;  ?></td>
            <td><?php echo  $me['id_pat'] ;  ?></td>
            <td><?php echo  $me['date_rdv'] ;  ?></td>
             <td><?php echo  $me['heure_rdv'] ;  ?></td>
           
            
              <?php  if($me['etat_rdv']!="Demande"){	?>  <td><?php echo  $me['etat_rdv'] ;  ?></td> 
                <td></td>
                <?php }else{?> 
 <td>
                      <button class="btn btn-primary btn-xs" onclick="accepterRDV(<?php echo  $me['id_rdv'] ;  ?>)">Accepter</button>
                    </td>   
                    <td>
                      <button class="btn btn-danger btn-xs" onclick="refuserRDV(<?php echo  $me['id_rdv'] ;  ?>)">Réfuser</button>
                    </td>
              <?php } ;    ?>
            
              
           
        
                  
                    
                    
                  </tr>
                  <?php  endforeach ;    ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
         
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
         
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          Ines Mlayeh
        </p>
        <div class="credits">
          
          Médical Care
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  
</body>

</html>
<?php
   }

   else {
      header('Location: index.php');
  
    }



?>