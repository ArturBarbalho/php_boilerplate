<?php
include('../config.php');
include('../core/classes/Database.php');
include('../core/classes/Mailer.php');

$db = new Database();
$res = $db->execute('SELECT * FROM clients');  
//$res = $db->select("INSERT INTO clients VALUES(0,'chico')");
//print_r($res);


