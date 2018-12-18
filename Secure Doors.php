<?php

fscanf(STDIN, "%d", $rows);
	
$map = array();

while ( $rows > 0) {
	fscanf(STDIN, "%s%s", $direction, $name);
	
	if ($map[$name] == "in" && $direction == "entry") {
		echo($name . " entered (ANOMALY)\n");
		$map[$name] = "in";
	}
	else if ($map[$name] == "out" && $direction == "exit") {
		echo($name . " exited (ANOMALY)\n");
		$map[$name] = "out";
	}
	else if ($map[$name] == null && $direction == "exit") {
		echo($name . " exited (ANOMALY)\n");
		$map[$name] = "out";
	}
	else if ($direction == "entry") {
		echo($name . " entered\n");
		$map[$name] = "in";
	}
	else if ($direction == "exit") {
		echo($name . " exited\n");
		$map[$name] = "out";
	}
	$rows--;
}

?>