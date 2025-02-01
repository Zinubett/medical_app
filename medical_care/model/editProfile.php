<?php 
require("connection.php");
$con=connect_db();
	$id=$_POST["idpatient"];
	$nom_pat=$_POST["nom_pat"];
	$prenom_pat=$_POST["prenom_pat"];
	$sexe=$_POST["sexe"];
	$tel_pat=$_POST["tel_pat"];
	$email_pat=$_POST["email_pat"];
	$date_nais=$_POST["date_nais"];


	$sql="UPDATE  `patient` SET `nom_pat`= '$nom_pat' , `prenom_pat`='$prenom_pat' ,
	 `sexe`= '$sexe' , `tel_pat`= '$tel_pat' , `email_pat`= '$email_pat' , 
	 `date_nais`= '$date_nais'  WHERE  `idpatient`='$id' 
 ";
$result=$con->query($sql);
        if ($result) {
        	echo " Patient a été modifié";

        }
        else echo "erreur";


	

?>
