<?php

fscanf(STDIN, "%s", $input);
$numberOfOdds = 0;

$letters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    
foreach($letters as &$letter) {
    if (substr_count($input,strtolower($letter)) % 2 != 0) {
        $numberOfOdds++;
    }
}

if ($numberOfOdds > 0) {
    echo $numberOfOdds-1;
}
else {
    echo $numberOfOdds;
}

?>