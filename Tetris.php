<?php

// Gets and converts the input
fscanf(STDIN, "%d%d", $numberOfColumns, $pieceNumber);

$cols = array();
$inputString = fgets(STDIN);
$letters = explode(" ", $inputString);
foreach ($letters as &$letter) {
    array_push($cols, (int)$letter);
}

// Variables
$possibilities = 0;

// Calls functions depending on the shape number
if ($pieceNumber == 1) {
    $possibilities += test1($cols, $numberOfColumns);
    $possibilities += test4($cols, $numberOfColumns);
}
else if ($pieceNumber == 2) {
    $possibilities += test2(0, $cols, $numberOfColumns);
}
else if ($pieceNumber == 3) {
    $possibilities += test2(-1, $cols, $numberOfColumns);
    $possibilities += test3(0, 0, 1, $cols, $numberOfColumns);
}
else if ($pieceNumber == 4) {
    $possibilities += test2(1, $cols, $numberOfColumns);
    $possibilities += test3(1, 0, 0, $cols, $numberOfColumns);
}
else if ($pieceNumber == 5) {
    $possibilities += test2(1, $cols, $numberOfColumns);
    $possibilities += test2(-1, $cols, $numberOfColumns);
    $possibilities += test3(0, 0, 0, $cols, $numberOfColumns);
    $possibilities += test3(1, 0, 1, $cols, $numberOfColumns);
}
else if ($pieceNumber == 6) {
    $possibilities += test2(-2, $cols, $numberOfColumns);
    $possibilities += test2(0, $cols, $numberOfColumns);
    $possibilities += test3(0, 0, 0, $cols, $numberOfColumns);
    $possibilities += test3(0, 1, 1, $cols, $numberOfColumns);
}
else {
    $possibilities += test2(2, $cols, $numberOfColumns);
    $possibilities += test2(0, $cols, $numberOfColumns);
    $possibilities += test3(0, 0, 0, $cols, $numberOfColumns);
    $possibilities += test3(1, 1, 0, $cols, $numberOfColumns);
}

// Returns the result
echo($possibilities);

// Functions for counting the possibilities
function test1($cols, $numberOfColumns) {
    return $numberOfColumns;
}

function test2($difference, $cols, $numberOfColumns) {
    $possibilities = 0;
    for ($i = 0; $i < ($numberOfColumns)-1; $i++) {
        if ($cols[$i+1]-$cols[$i] == $difference) {
            $possibilities++;
        }
    }
    return $possibilities;
}

function test3($one, $two, $three, $cols, $numberOfColumns) {
    $possibilities = 0;
    for ($i = 0; $i < ($numberOfColumns)-2; $i++) {
        if (($cols[$i]-$one) == ($cols[$i+1]-$two) && ($cols[$i+1]-$two) == ($cols[$i+2]-$three)) {
            $possibilities++;
        }
    }
    return $possibilities;
}

function test4($cols, $numberOfColumns) {
    $possibilities = 0;
    for ($i = 0; $i < ($numberOfColumns)-3; $i++) {
        if ($cols[$i] == $cols[$i+1] && $cols[$i+1] == $cols[$i+2] && $cols[$i+2] == $cols[$i+3]) {
            $possibilities++;
        }
    }
    return $possibilities;
}
 
?>