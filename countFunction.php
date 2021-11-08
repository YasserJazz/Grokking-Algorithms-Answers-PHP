<?php

function arrayCount(array $arr)
{
    if (count($arr) == 1) {
        return 1;
    } else {
        array_pop($arr);
        $thisCount = 1 + arrayCount($arr);
    }
    return $thisCount;
}

echo arrayCount([1, 3, 5, 4]);
