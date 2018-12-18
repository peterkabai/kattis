<?php
$case = 1;
fscanf(STDIN, "%d", $cases);
while ($cases > 0) {
    $cases--;
    
    fscanf(STDIN, "%d", $people);
    $numbers = explode(" ", fgets(STDIN));
    $count = count($numbers);
    
    $i = 0;
    while ($i < $count) {
        $numbers[$i] = intval($numbers[$i]);
        $i++;
    }

    sort($numbers);
    
    $i = 0;
    while ($i < $count) {
        
        if (intval($numbers[$i]) != intval($numbers[$i+1])) {
            echo("Case #" . $case . ": " . intval($numbers[$i]) . "\n");
            break;
        } else {
            $i+=2;
            
        }
    }
    $case++;  
}

?>