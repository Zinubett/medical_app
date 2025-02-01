<?php 
require("connexion.php");




function get_all_patient()
{

$con=connect_db();

$patient=array();

$sql="SELECT `patient`.`idpatient`,`patient`.`nom_pat`,
`patient`.`prenom_pat`,`patient`.`sexe`,`patient`.`tel_pat`,
`patient`.`email_pat`,`patient`.`date_nais` , `rdv`.`id_rdv` 
FROM `patient` JOIN `rdv` ON  `rdv`.`id_pat`=`patient`.`idpatient`  
 WHERE `rdv`.`etat_rdv`='Accepté' ";


$result=$con->query($sql);

foreach($result as $ligne){
      $patient[]=$ligne;

}

return $patient;

}

?>