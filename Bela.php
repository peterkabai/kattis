<?php

fscanf(STDIN, "%s%s", $numberOfHands, $dominantSuite);

$numberOfCards = $numberOfHands*4;
$totalValue = 0;

while ($numberOfCards > 0) {
    fscanf(STDIN, "%s", $cardInfo);
    
    $cardNumber = substr($cardInfo, 0, 1);
    $cardSuite = substr($cardInfo, 1, 2);
    
    switch ($cardNumber) {
        case "A":
            $totalValue += 11;
            break;
        case "K":
            $totalValue += 4;
            break;
        case "Q":
            $totalValue += 3;
            break;
        case "J":
            if ($cardSuite == $dominantSuite) {
                $totalValue += 20;
                break;
            }
            else {
                $totalValue += 2;
                break;
            }
        case "T":
            $totalValue += 10;
            break;
        case "9":
            if ($cardSuite == $dominantSuite) {
                $totalValue += 14;
                break;
            }
            else {
                $totalValue += 0;
                break;
            }
        case "8":
            $totalValue += 0;
            break;
        case "7":
            $totalValue += 0;
            break;
    }
    $numberOfCards--;
}

echo($totalValue);

?>