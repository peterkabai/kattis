<?php

fscanf(STDIN, "%d%d%d", $one, $two, $three);
$jumps = 0;
$canJump = true;
while ($canJump) {
	
	$firstDif = $two - $one;
	$secondDif = $three - $two;
	
	if ($firstDif > 1 || $secondDif > 1) {
		if ($firstDif > $secondDif) {
			$three = $two;
			$two = $three - 1;
		}
		else {
			$one = $two;
			$two = $one + 1;
		}
		$jumps++;
	}
	else {
		$canJump = false;
	}
}
echo($jumps);

?>