<?php
require("connexion.php");
$connexion=connect_db();



$id_rdv=$_POST['id_rdv'];
$id_pat=$_POST['idpatient'];

$sql="UPDATE `rdv` SET `etat_rdv`='Servie' WHERE `id_rdv`='$id_rdv' and `id_pat`='$id_pat'";

$result=$connexion->query($sql);

if($result){
	echo "Rendez_vous  a été servie !";
}
else echo "Erreur !";
?>