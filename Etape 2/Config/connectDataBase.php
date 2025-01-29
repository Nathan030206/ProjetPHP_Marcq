<?php 

try{
    $strConnexion = "mysql:host=localhost;dbname=school;port=3306" ;
    $pdo=new PDO($strConnexion,"root","NM-Nathan2006.",[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
} catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}

?>