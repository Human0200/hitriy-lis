<?php
require "lib/php/route.php";

$url = key($_GET); 


$r = new Router;
$r->addRoute("/", "main.php"); 
$r->addRoute("/anons", "anons.php"); 
$r->addRoute("/sale", "sale.php");  
$r->addRoute("/price", "price.php"); 
$r->addRoute("/prazdniki", "prazdniki.php");  
$r->addRoute("/park", "park.php"); 

$r->route("/".$url); 

?>