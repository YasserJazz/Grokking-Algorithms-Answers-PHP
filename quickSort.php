<?php

function quickSort($arr)
{
    if (count($arr) < 2) {
        return $arr;
    } else {
        $pivot = $arr[0];
        $pivotArray = [];
        array_push($pivotArray, $arr[0]);
        $less = [];
        $more = [];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] <= $pivot) {
                array_push($less, $arr[$i]);
            } else {
                array_push($more, $arr[$i]);
            }
        }
    }
    return array_merge(quickSort($less), $pivotArray, quickSort($more));
}

echo json_encode(quickSort([11, 4, 33, 100, 90, 3, 2, 15]));
