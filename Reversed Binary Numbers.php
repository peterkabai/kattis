<?php

fscanf(STDIN, "%d", $decimal);
	
	$binaryString = (string)decbin($decimal);
	echo(bindec(strrev($binaryString)));

?>