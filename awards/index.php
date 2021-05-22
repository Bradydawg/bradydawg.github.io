<?php
$file = "./ip.txt";
$date   = date("Y-m-d H:i:s");
$ip     = $_SERVER["REMOTE_ADDR"];  
$write =  "Date = ".$date." :>IP = ".$ip."|";
file_put_contents($file, $write, FILE_APPEND);
?>