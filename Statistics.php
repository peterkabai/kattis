<?php

$count = 1;

while(true) {
	$input = fgets(STDIN);
	if ($input == NULL || $input == "" || $input == "\n") {
		break;
	}
	else {
		$letters = explode(" ", $input);
		unset($letters[0]);
		
		$numbers = array();
		
		foreach ($letters as &$letter) {
		    array_push($numbers, (int)$letter);
		}
		
		echo("Case " . $count . ": " . min($numbers) . " " . max($numbers) . " " . (max($numbers)-min($numbers)) . "\n");
		
		$count++;
	}
}

?>