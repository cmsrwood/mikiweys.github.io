<?php
if(isset($_POST['modificar'])){
   $imagen = $_FILES['imagenm']['name'];
   $producto = $_POST['productom'];
   $preuni = $_POST['preunim'];
   $cat = $_POST['catm'];
   $cant = $_POST['cantm'];

    //VALIDAR QUE EL USUARIO REGISTRE TODOS LOS CAMPOS QUE SEAN OBLIGATORIOS

    if($imagen=="" OR $producto== "" OR $preuni=="" OR  $cat=="" OR $cant==""){
        echo 'llene todos los campos';
    }else{
        require("conexion.php");
        //MODIFICAR LOS DATOS EN LA TABLA
        $modificar = "UPDATE inventario SET producto = '$producto', preuni = '$preuni', cat = '$cat', cantidad = $cant WHERE id_inv = $id_inv";
        $db->query($modificar);
        echo 'modificacion exitosa'; 
        
    }
   }
?>