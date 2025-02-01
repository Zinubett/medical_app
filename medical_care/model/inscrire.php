<?php

   require("connection.php");
    $connexion=connect_db();
         
  
               $nom_pat=$_POST['nom_pat'];
               $prenom_pat=$_POST['prenom_pat'];
               $sexe=$_POST['sexe'];
               $tel_pat=$_POST['tel_pat'];
               $email_pat=$_POST['email_pat'];
               $mot_passe_pat=$_POST['mot_passe_pat'];
               $date_nais=$_POST['date_nais'];
               
              

                    
$sql="INSERT INTO `patient`(`idpatient`, `nom_pat`, `prenom_pat`, `sexe`, `tel_pat`, `email_pat`, `mot_passe_pat`, `date_nais`) VALUES
 (NULL,'$nom_pat','$prenom_pat','$sexe','$tel_pat','$email_pat','$mot_passe_pat','$date_nais');";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                        echo"Patient a inscrire";
  //                       session_start();
	// $_SESSION["log"]="1";

	// $_SESSION["idpatient"]=$row["idpatient"];
  //                         $(location).attr("href","conindex.php"); 

                      }
                      else echo "erreur ";



                      ?>