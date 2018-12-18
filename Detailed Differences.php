<?php

fscanf(STDIN, "%d", $numberOfPairs);

while ($numberOfPairs > 0) {
    fscanf(STDIN, "%s", $lineOne);
    fscanf(STDIN, "%s", $lineTwo);
    
    echo($lineOne . "\n");
    echo($lineTwo . "\n");
    
    $count = 0;
    while ($count < strlen($lineOne)) {
        
        if($lineOne[$count] != $lineTwo[$count]) {
            echo("*");
        }
        else echo(".");
        $count++;
    }
    echo("\n\n");
    
    
    
    $numberOfPairs--;
}

?>