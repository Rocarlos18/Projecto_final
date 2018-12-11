<?php

try{
$con = new PDO ("mysql:host=localhost;dbname=id8155045_contacto","id8155045_root","12345678"); 
$del_id = $_GET['del_id'];
$DELETE = $con->prepare("DELETE FROM contactos WHERE idasunto='$del_id'");
$DELETE->execute();
header("location:mostrar.php");
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>