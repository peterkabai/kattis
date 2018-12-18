<?php
fscanf(STDIN, "%d", $linesToRead);
while ($linesToRead > 0) {
	fscanf(STDIN, "%s", $inputLine);
	$length = strlen($inputLine);
	$size = ceil(sqrt($length));
	while ($length < $size*$size) {
		$inputLine = $inputLine . "*";
		$length++;
	}
	$outputString = "";
	for ($j = $size*$size-$size; $j < $size*$size; $j++) {
		for ($i = 0; $i <= $size*$size-$size; $i = $i+$size) {
			$char = substr($inputLine, $j-$i, 1);
			if ($char != "*") {
				$outputString = $outputString . $char;
			}
		}		
	}
	echo ($outputString . "\n");
	$linesToRead--;	
}
?>