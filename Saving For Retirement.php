<?php

fscanf(STDIN, "%d%d%d%d%d", $b, $br, $bs, $a, $as);
	
$bobsMoney = ($br - $b) * $bs;
$aliceMoney = 0;
while ($aliceMoney <= $bobsMoney) {
	$a++;
	$aliceMoney += $as;
}
echo($a);
?>