<?php
require("connexion.php");
$connexion=connect_db();



$id_rdv=$_POST['id_rdv'];


$sql="UPDATE `rdv` SET `etat_rdv`='Accepté' WHERE `id_rdv`='$id_rdv' ";

$result=$connexion->query($sql);

if($result){
	echo "Rendez_vous  a été accepté !";
}
else echo "Erreur !";
?>