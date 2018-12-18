<?php

fscanf(STDIN, "%d%d", $needed, $owned);
    
if($needed > $owned) {
    if (abs($owned-$needed) == 1) {
        echo("Dr. Chaz needs 1 more piece of chicken!");
    } else {
        echo("Dr. Chaz needs " . abs($owned-$needed) . " more pieces of chicken!");
    }
} else if ($owned-$needed == 1){
    echo("Dr. Chaz will have 1 piece of chicken left over!");
} else {
    echo("Dr. Chaz will have " . ($owned-$needed) . " pieces of chicken left over!");
}

?>