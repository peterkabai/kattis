<?php

fscanf(STDIN, "%d", $numberOfTrees);
$numbers = explode(" ", fgets(STDIN));

$count = count($numbers);

$i = 0;
while ($i < $count) {
    $numbers[$i] = intval($numbers[$i]);
    $i++;
}

rsort($numbers);
$count = 0;

while($count <= $numberOfTrees) {
    $numbers[$count] = intval($numbers[$count])+1+$count;
    $count++;
}
echo(max($numbers)+1);

?>