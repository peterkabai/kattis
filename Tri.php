<?php

fscanf(STDIN, "%d%d%d", $one, $two, $three);
	
if ($one/$two == $three) {
	echo($one."/".$two."=".$three);
}
else if ($one*$two == $three) {
	echo($one."*".$two."=".$three);
}
else if ($one+$two == $three) {
	echo($one."+".$two."=".$three);
}
else if ($one-$two == $three) {
	echo($one."-".$two."=".$three);
}
else if ($one == $two/$three) {
	echo($one."=".$two."/".$three);
}
else if ($one == $two*$three) {
	echo($one."=".$two."*".$three);
}
else if ($one == $two-$three) {
	echo($one."=".$two."-".$three);
}
else if ($one == $two+$three) {
	echo($one."=".$two."+".$three);
}

?>