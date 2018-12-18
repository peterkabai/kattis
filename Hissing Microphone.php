<?php

fscanf(STDIN, "%s", $input1);

$array = str_split($input1);
$length = strlen($input1);

$pos = 0;
$previous = "";
while ($pos < $length) {
    if ($array[$pos] == "s" AND $previous == "s") {
        echo("hiss");
        exit;
    }
    $previous = $array[$pos];
    $pos++;
}
echo("no hiss");

?>