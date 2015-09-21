<?php

    function calculateHandValue($cards) {

	$return_value = 0; // Best Practice Tip: set this to a starting value to avoid strange results
	$temp_aces = 0;

	foreach($cards as $card) {
		if($card['value'] != 1) {
			$return_value = $card['value'];
		} else {
			$temp_aces++;
		}
	}

	//Special consideration for Aces
	for($i = 0; $i < $temp_aces; $i++) {
		$return_value += (($return_value +11) > 21 ? 1 : 11);
	}

	return $return_value;
}


?>

