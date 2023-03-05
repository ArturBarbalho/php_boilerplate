<?php 
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso negado');
}
include('../core/classes/Database.php');
//criar tabela== id,path,data
$file = $_POST['file'];
/*
$db = new Database(); 
$res = $db->execute("INSERT INTO clients VALUES(0,'chico')");
print_r($res);*/
//header('Location: home.php');