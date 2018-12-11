<?php

try{
$con = new PDO ("mysql:host=localhost;dbname=id8155045_contacto","id8155045_root","12345678"); 
echo "connected";
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>