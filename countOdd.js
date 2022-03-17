<?php
function countOdds($low, $high) {
    $count = 0;
    for($low; $low <= $high; $low++){
        $low%2 == 1 ? $count++ : $count;
    }
    return $count;
}

echo countOdds(3 ,7);

?>
