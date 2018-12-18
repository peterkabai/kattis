<?php

fscanf(STDIN, "%d", $numberOfInputs);

while ($numberOfInputs > 0) {
    $numberOfInputs--;
    
    $cities = [];

    fscanf(STDIN, "%d", $numberOfCities);
    while ($numberOfCities > 0) {
        $numberOfCities--;
        fscanf(STDIN, "%s", $city);
        array_push($cities, $city);
    }
    echo(count(array_count_values($cities)) . "\n");
}

?>