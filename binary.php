
<?php

$arr = [1, 2, 3, 4, 5, 6];
$goal = 22;

$low = 0;
$high = count($arr) - 1;


while ($low <= $high) {
    $mid = floor(($low + $high) / 2);
    $midElement = $arr[$mid];
    if ($midElement == $goal) {
        echo $mid;
        break;
    } elseif ($midElement > $goal) {
        $high = $mid - 1;
    } else {
        $low = $mid + 1;
    }
}
echo -1;
