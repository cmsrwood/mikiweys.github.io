<?php 
$link = 'mysql:host=localhost;dbname=noname';
$usuario = 'root';
$pass = '';

try{

    $pdo = new PDO($link,$usuario,$pass);

}  
catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

