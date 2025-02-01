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
<script type="text/javascript" src="assets/js/scripts.js"></script>  
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  </head>

  <body>
   
    <!--***************************** Slider Starts Here *****************************-->
    <section class="container">
      <section class="connect"><form>
        
   <div class="form-group">
            <label for="nom_pat">Nom patient</label>
            <input
              type="text"
              class="form-control"
              id="nom_pat"
              aria-describedby="emailHelp"
              placeholder="Enter nom patient"
            />
           
          </div>
   <div class="form-group">
            <label for="prenom_pat">Prenom patient</label>
            <input
              type="text"
              class="form-control"
              id="prenom_pat"
             
              placeholder="Enter prenom patient"
            />
           
          </div>
           <div class="form-group">
            <label for="sexe">Sexe patient</label>
            <input
              type="text"
              class="form-control"
              id="sexe"
             
              placeholder="Enter sexe patient"
            />
           
          </div>
          <div class="form-group">
            <label for="tel_pat">Tel patient</label>
            <input
              type="text"
              class="form-control"
              id="tel_pat"
             
              placeholder="Enter tel patient"
            />
           
          </div>
          <div class="form-group">
            <label for="date_nais">Date naissance</label>
            <input
              type="text"
              class="form-control"
              id="date_nais"
             
              placeholder="Enter date naissance patient"
            />
           
          </div>
          
          <div class="form-group">
            <label for="email_pat">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email_pat"
              aria-describedby="emailHelp"
              placeholder="Enter email"
            />
           
          </div>
          <div class="form-group">
            <label for="mot_passe_pat">Password</label>
            <input
              type="password"
              class="form-control"
              id="mot_passe_pat"
              placeholder="Password"
            />
          </div>
         
      
         <div>
            <button type="submit" class="btn btn-success"  id="logclient" onclick="inscrir()" >
              Inscrire
            </button>
          </div>
        </form>
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

  <script>
$(document).ready(function(){

  $("#connecterclient").click(function(){
    var email_pat=$('#email_pat').val();
    var mot_passe_pat=$('#mot_passe_pat').val();
    $.post("model/login.php",
    {
      email_pat: email_pat,
      mot_passe_pat: mot_passe_pat
    },
    function(data,status){
      if (data=="success") {
       
        
           $(location).attr("href","conindex.php"); 
        
        
      }
      else {
          $("#reponse").html("Probleme de connexion");
          $("#reponse").fadeIn("slow");
          $("#addmaile").val('');
          $("#addmp").val('');
      }

    });
  });

      $("#addmaile").keypress(function(){
      $("#reponse").text('');
      });

});
</script>
</html>
