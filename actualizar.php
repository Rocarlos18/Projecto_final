<?php
try{
$con = new PDO ("mysql:host=localhost;dbname=id8155045_contacto","id8155045_root","12345678"); 

$edit_id = $_GET['edit_id'];


$select = $con->prepare("SELECT * FROM contactos where idasunto='$edit_id' ");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$data=$select->fetch();
if(isset($_POST['done']))
{

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];

$update = $con->prepare("UPDATE contactos SET nombre=:nombre,correo=:correo,telefono=:telefono ,asunto=:asunto where idasunto='$edit_id'");
$update->bindParam(':nombre',$nombre);
$update->bindParam(':correo',$correo);
$update->bindParam(':telefono',$telefono);
$update->bindParam(':asunto',$asunto);
$update->execute();
header("location:mostrar.php");
}
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}
?>
<form method="post">
<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $data['nombre'] ?>">
<input type="text" name="correo" placeholder="Correo" value="<?php echo $data['correo'] ?>">
<input type="text" name="telefono" placeholder="Telefono" value="<?php echo $data['telefono'] ?>">
<input type="text" name="asunto" placeholder="Asunto" value="<?php echo $data['asunto'] ?>">
<input type="submit" name="done" >
</form>