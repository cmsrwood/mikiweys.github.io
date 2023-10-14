<?php 
$query = $db->query("SELECT * from inventario WHERE producto LIKE '%'$buscador'%'");
$buscar = $query;
?>