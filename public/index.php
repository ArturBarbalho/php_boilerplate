<?php
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
        if(isset($_GET['parameter'])){
            $parameter = $_GET['parameter'];
            Functions::Layout($route,$parameter);
        }
        else{
            Functions::Layout($route);  
        }
    } 
}


