<?php
    function drawCard (&$deck) {
        // The & preceding the input indicates a variable reference
        
        $suit = array_rand($deck);
        $card = array_rand($deck[$suit]);
        
        // Determine the face value of the card.
	// Face cards are worth 10
	if ($card >=10){
        $card_value = 10;
        }
        else {
            $card_value = $card;
        }
                        
        $return_value = array('display' =>
                    ($card < 10) ? $suit. "0{$card}.jpg" :
                    "$suit{$card}.jpg", 'value' => $card_value);
                // returns a two element array showing a card's suit & face value
        
        unset($deck[$suit][$card]);
        
        return $return_value;
        // returns a two-element array showing a card's suit and face value
    }
    
?>