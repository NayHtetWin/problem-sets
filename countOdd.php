<?php

function countOdds($low, $high) {
	$count = $high - $low;
	if (($high+$low)%2){
	    return ($count+1)/2;
	}
	else{
	    return ($low%2) ? ($count+2)/2 : $count/2;
	}
}

echo countOdds(1, 10);
