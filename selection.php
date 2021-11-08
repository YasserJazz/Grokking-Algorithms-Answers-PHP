<?php

function getSmallest($arr)
{
    $smallestIndex = 0;
    $smallestElement = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $smallestElement) {
            $smallestIndex = $i;
            $smallestElement = $arr[$i];
        }
    }
    return $smallestIndex;
}

function selectionSort($selectedArray)
{
    $sortedArray = [];
    for ($i=0; $i < count($selectedArray); $i++) { 
        echo count($selectedArray);
        echo $i;
        echo "<br/>";
        $smallestIndex = getSmallest($selectedArray);
        $sortedArray[] = $selectedArray[$smallestIndex];
        unset($selectedArray[$smallestIndex]);
    }
    return $sortedArray;
} 

echo json_encode(selectionSort([2, 5, 10, 1])); // output now is [1,2]
