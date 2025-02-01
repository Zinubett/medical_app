<?php

   require("connection.php");
    $connexion=connect_db();
         
  
               $date_rdv=$_POST['date_rdv'];
               $heure_rdv=$_POST['heure_rdv'];
               $idpatient=$_POST["idpatient"];
             
               
              

                    
$sql="INSERT INTO `rdv`(`id_rdv`,`id_pat`, `date_rdv`, `heure_rdv` ) VALUES
 (NULL,'$idpatient','$date_rdv','$heure_rdv');";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                        echo"Rendez_vous a ajouté";
             }
                      else echo "erreur ";



                      ?>