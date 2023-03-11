<?php
require('../vendor/autoload.php');
include("../core/classes/Functions.php");
$routes = [
    'home',
    'about'
];
if(empty($_GET)){
    Functions::Layout('home'); 
}
foreach($routes as $route){
    if(isset($_GET[$route])){
            Functions::Layout($route);  
        }
}


















