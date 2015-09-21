<?php
// foreach exercise
// print sum of every two cards from child's game deck
// create the deck
$cards = array(1,2,3,4);
$deck = array('red' => $cards,
            'blue' => $cards,
            'green' => $cards,
            'yellow' => $cards);


// initialize variables
$sum = 0;
$numCards = 0;

// iterate over the suits
foreach ($deck as $suit) {
    // iterate over the cards
    foreach ($suit as $card) {
        $sum += $card;
        $numCards++;
        // do we have one or two cards?
        if (2 === $numCards) {
            // print the sum
            echo $sum . PHP_EOL;
            // reset variables as needed
            $numCards = 0;
            $sum = 0;
        }
        echo $card . ' '; // just for testing
    }
}

