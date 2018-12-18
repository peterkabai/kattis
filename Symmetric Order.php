<?php

$set = 1;
do {
    fscanf(STDIN, "%d", $numberOfNames);
    if ($numberOfNames == 0) {
        break;
    }
    else {
        $names = [];
        while ($numberOfNames > 0) {
            fscanf(STDIN, "%s", $name);
            array_push($names, $name);  
            $numberOfNames--;   
        }   
        
        $topNames = [];
        $bottomNames = [];
        $count = 0;
        while ($count < count($names)) {
            if ($count % 2 == 0) {
                array_push($topNames, $names[$count]);
            }
            else {
                array_push($bottomNames, $names[$count]);
            }   
            $count++;
        }
        
        $bottomNames = array_reverse($bottomNames);
        
        echo("SET " . $set . "\n");
        $set++;
        
        
        foreach($topNames as $name) {
            echo($name . "\n");
        }
        foreach($bottomNames as $name) {
            echo($name . "\n");
        }
        
    }
    
} while (1)

?>