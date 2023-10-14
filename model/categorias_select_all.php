<?php 
$query = $db->query("SELECT * FROM `categorias` ORDER BY `categorias`.`categoria` ASC");
$categorias = $query;
?>