<?php 
$query = $db->query("SELECT * from inventario ORDER BY RAND()");
$inventario = $query;
?>