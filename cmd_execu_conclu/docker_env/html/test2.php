<?php 
$test = $_GET['cmd']; 
system("ping -c 3 " . $test); 
?>