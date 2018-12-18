<?php

while(fscanf(STDIN, "%d%d", $numerator, $denominator)) {
	
	if ($numerator == 0 && $denominator == 0) {
		break;
	}
	
	if ($numerator < $denominator) {
		echo("0 " . $numerator . " / " . $denominator . "\n");
	}
	else {
		echo($numerator/$denominator - $numerator%$denominator/$denominator . " " . $numerator%$denominator . " / " . $denominator . "\n");
	}
}

?>