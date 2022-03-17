<?php

function countOdds($low, $high) {
    $count = $high - $low + 1;
		if (($high+$low)%2){
			return $count/2;
        }
		else{
			return ($low%2) ? ($count+1)/2 : ($count-1)/2;
        }
}

echo countOdds(1, 10);
