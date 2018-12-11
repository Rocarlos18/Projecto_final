<?php

try{
$con = new PDO ("mysql:host=localhost;dbname=id8155045_contacto","id8155045_root","12345678"); 

if(isset($_POST['done']))
{

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];

$insert = $con->prepare("INSERT INTO contactos (nombre,correo,telefono,asunto) VALUES(:nombre,:correo,:telefono,:asunto)");
$insert->bindParam(':nombre',$nombre);
$insert->bindParam(':correo',$correo);
$insert->bindParam(':telefono',$telefono);
$insert->bindParam(':asunto',$asunto);
$insert->execute();
echo "Contacto Guardado";
}
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}
?>
<form method="post">
    
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="correo" placeholder="correo">
    <input type="text" name="telefono" placeholder="Telefono">
    <input type="text" name="asunto" placeholder="Asunto">
    <input type="submit" name="done" >
    <a href="index.html"><input type="button" value="Inicio"></a>
    <a href="mostrar.php"><input type="button" value="Registos"></a>
</form>