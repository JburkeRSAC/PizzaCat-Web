<?php
#var_dump($argv);
$file = trim(file_get_contents("$argv[1]"));
$explosion = explode("\n", $file);
#print_r($explosion);
$i = 0;
foreach($explosion AS $line){
	$results[] = strrev($line);
	#echo $i." : ".strrev($line)."\n";
	$i++;
}
sort($results);
#print_r($results);
$i = 0;
foreach($results AS $line){
	$real_results[] = strrev($line);
	echo strrev($line)."\n";
	$i++;
}
#sort($results);
#print_r($real_results);

