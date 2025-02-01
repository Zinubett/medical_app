<?php

$email_pat=$_POST['email_pat'];
$mot_passe_pat=$_POST['mot_passe_pat'];  



$db=mysqli_connect("localhost","root","","hospital");

$sql="SELECT * FROM `patient` WHERE `mot_passe_pat`='$mot_passe_pat' and `email_pat`='$email_pat' ; ";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

if ($count>0)
{$row =mysqli_fetch_assoc($result);


	echo "success";
	session_start();
	$_SESSION["log"]="1";

	$_SESSION["idpatient"]=$row["idpatient"];
	
	$_SESSION["nom_pat"]=$row["nom_pat"];
}
else  echo "failed";


?>