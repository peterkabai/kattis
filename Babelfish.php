<?php
$eng = "empty";

$array = [];
    
$name = "empty";
while ($name != "") {
     $name = trim(fgets(STDIN));
     $in = explode(" ", $name);
     if ($in[0] != "") {
        $array[$in[1]] = $in[0];
     }
}

while (fscanf(STDIN, "%s", $inputWord)) {
    
    if ($inputWord == "") {
        break;
    }
    if ($inputWord == "\r") {
        break;
    }
    if ($inputWord == "\n") {
        break;
    }
    
    $word = $array[$inputWord];

    if ($word != null) {
        echo($array[$inputWord] . "\n");
    } else {
        echo("eh\n");
    }  
}

?>