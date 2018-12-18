<?php

fscanf(STDIN, "%d%d", $max, $lines);


$rooms = range(1, $max);

$lin = $lines;

while ($lines > 0) {
    fscanf(STDIN, "%d", $index);
    $rooms[$index-1] = NULL;
    $lines--;
}

$avaliable = [];
foreach ($rooms as $room) {
    if ($room != null) {
        array_push($avaliable, $room);
    }
}

if ($max == $lin) {
    echo("too late");
}
else {
    echo($avaliable[0]);
}

?>