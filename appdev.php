<?php
$min = $_POST['min'];
$max = $_POST['max'];
$ruid = $_POST["user"];
$ip = $_SERVER["REMOTE_ADDR"];
echo "You really rock!!\n";
$now = date("Y-m-d H:i:s");
$rec = $now . ',' . $min . ',' . $max . ',' . $ruid. ',' . $ip . "\n";
$file = "record.txt";
if(file_exists($file))
	$p = fopen($file, "a");
else
	$p = fopen($file, "w");
fwrite($p, $rec);
fclose($p);
?>