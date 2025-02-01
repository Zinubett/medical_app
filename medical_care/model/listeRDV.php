<?php 
require("connection.php");




function get_all_rdv()
{

$con=connect_db();

$rdv=array();
$sql="SELECT * FROM `rdv` ";
$result=$con->query($sql);

foreach($result as $ligne){
      $rdv[]=$ligne;

}

return $rdv;

}

?>