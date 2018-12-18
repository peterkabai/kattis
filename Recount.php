<?php

$names = [];

$name = "";
while ($name != "***") {
	 $name = trim(fgets(STDIN));;
	 if ($name != "***") {
	 	array_push($names, $name);
	 }
}

$counted = array_count_values($names);

$listNames = [];
$listOccurances = [];

while ($value = current($counted)) {
    array_push($listOccurances, $value);
    array_push($listNames, key($counted));
    next($counted);
}

$tieArray = $listOccurances;
rsort($tieArray);
arsort($listOccurances);

if (   intval($tieArray[0]) == intval($tieArray[1])   ) {
	echo("Runoff!");
}
else {
	$max = array_search(max($listOccurances), $listOccurances);
	echo($listNames[$max]);
}
	
?>