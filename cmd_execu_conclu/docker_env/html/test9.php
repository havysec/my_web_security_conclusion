<?php 
$test = $_GET['cmd']; 
$test = str_replace("cat", "", $test);
$test = str_replace("ls", "", $test);
$test = str_replace(" ", "", $test);
$test = str_replace("pwd", "", $test);
$test = str_replace("wget", "", $test);
// var_dump($test);
system("ls -al '$test'"); 
?>