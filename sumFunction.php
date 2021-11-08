<?php

function arraySum(array $arr)
{
    if (count($arr) == 1) {
        return $arr[array_key_last($arr)];
    } else {
       $thisSum = array_pop($arr) + arraySum($arr);
    }
    return $thisSum;
}

echo arraySum([1, 2, 3, 5, 4]);
