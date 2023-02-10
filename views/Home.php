<?php
include('../core/classes/Database.php');

$db = new Database();
$res = $db->select('SELECT * FROM clients');
//$res = $db->select("INSERT INTO clients VALUES(0,'chico')");
print_r($res);
