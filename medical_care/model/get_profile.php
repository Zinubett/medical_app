<?php

require("connection.php");
$con=connect_db();



$idpatient=$_POST['idpatient'];

$sql="SELECT * FROM `patient` WHERE `idpatient`='$idpatient' ";

$result=$con->query($sql);

if($result){

$patient=$result->fetch();
echo json_encode($patient);
 }




?>