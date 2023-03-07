<?php 
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso negado');
}
if(isset($_FILES['file'])){
    $file = $_FILES['file'];
}
else{
    die('KYERO');
}
include('../classes/Database.php');
//criar tabela== id,path,data
$path = '../../uploaded_files/';
$file_original_name = $file['name'];
$extension = strtolower(pathinfo($file_original_name, PATHINFO_EXTENSION));
$file_name = uniqid() . "." . $extension;
$save = move_uploaded_file($file['tmp_name'], $path . $file_name);
/*
$db = new Database(); 
$res = $db->execute("INSERT INTO clients VALUES(0,'chico')");
print_r($res);*/
//header('Location: home.php');