<?php 
$query = $db->query("SELECT * from inventario WHERE producto LIKE '%'$buscador'%'");
$inventario = $query;
?>