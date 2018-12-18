<?php

fscanf(STDIN, "%d%d", $dice1Sides, $dice2Sides);

$allAnswers = array();

$savedDice2Sides = $dice2Sides;
$allSumms = array();

while ($dice1Sides > 0) {
    while ($dice2Sides > 0) {
        array_push($allSumms, $dice1Sides+$dice2Sides);
        $dice2Sides--;
    }
    $dice2Sides = $savedDice2Sides;
    $dice1Sides--;
}

$values = array_count_values($allSumms);
arsort($values);

$maxOccurances = reset($values);

foreach($values as $key => $val) {
    if ($maxOccurances == $val) {
        array_push($allAnswers, $key);
    }   
}
asort($allAnswers);

foreach($allAnswers as $key => $val) {
    echo($val . "\n");  
}

?>