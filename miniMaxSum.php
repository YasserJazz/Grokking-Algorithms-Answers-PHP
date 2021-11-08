<?php
function miniMaxSum($arr) {
    $max = $arr[0];
    $min = $arr[0];
    $minSum = 0;
    $maxSum = 0;
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] <= $min)
            $min = $arr[$i];
        if($arr[$i] >= $max)
            $max = $arr[$i];
    }
    foreach($arr as $aa){
        if($aa != $min && $checked == false){
            $maxSum += $aa;
        } else {
            $checked = true;
        }
        if($aa != $max)
            $minSum += $aa;
    }
    return $minSum . ' ' . $maxSum;
}


echo miniMaxSum([5, 5, 5, 5, 5]);