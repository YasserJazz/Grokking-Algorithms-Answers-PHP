<?php

function maxNumber($arr1){
    $max = $arr1[0];
    for ($i=1; $i < count($arr1); $i++) { 
        if ($arr1[$i] > $max)
            $max = $arr1[$i];
    }
    return $max;
}

echo maxNumber([1,22,3,4,5]);

?>