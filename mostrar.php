<table border="2">
    <thead>
        <tr>
            <th colspan="11"><h3><a href="index.html">Inicio</h3></th>
        </tr>
        <tr>
            <th colspan="11"><h3><a href="guardar.php">Agregar Contactos</h3></th>
        </tr>
        <tr>
            <th>ID Asunto</th>
            <th>Nombre</th></th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Asunto</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
<?php
try{
$con = new PDO ("mysql:host=localhost;dbname=id8155045_contacto","id8155045_root","12345678"); 
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$select = $con->prepare("SELECT * FROM contactos");

$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
while($data=$select->fetch()){
?>

<tr>
<td><?php echo $data['idasunto']; ?></td>
<td><?php echo $data['nombre']; ?></td>
<td><?php echo $data['correo']; ?></td>
<td><?php echo $data['telefono']; ?></td>
<td><?php echo $data['asunto']; ?></td>
<td><a href="actualizar.php?edit_id=<?php echo $data['idasunto']; ?>">Editar</a></td>
<td><a href="eliminar.php?del_id=<?php echo $data['idasunto']; ?>">Borrar</a></td>
<?php
}
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>
</tr></table>