<?php

$lg=$_POST['lg'];
$mp=$_POST['mp'];  



$db=mysqli_connect("localhost","root","","hospital");

$sql="SELECT * FROM `médecin` WHERE `email_med`='$lg' and `mot_passe_med`='$mp' ; ";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

if ($count>0)
{$row =mysqli_fetch_assoc($result);

	echo "success";
	session_start();
	$_SESSION["log"]="1";
	$_SESSION["idmedecin"]=$row["idmedecin"];
	$_SESSION["nom"]=$row["nom_med"];
}
else  echo "le mot de passe ou l'adresse mail incorrect";


?>