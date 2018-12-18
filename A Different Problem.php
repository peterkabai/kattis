<?php

while( fscanf(STDIN, "%d%d", $input1, $input2)   ) {
    $difference = abs($input1-$input2);
    echo($difference."\n");
}

?>