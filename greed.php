<?php

function greed()
{
    $statesNeeded = ["mt", "wa", "or", "id", "nv", "ut", "ca", "az"];

    $stations = [];
    $stations["kone"] = ["id", "nv", "ut"];
    $stations["ktwo"] = ["wa", "id", "mt"];
    $stations["kthree"] = ["or", "nv", "ca"];
    $stations["kfour"] = ["nv", "ut"];
    $stations["kfive"] = ["ca", "az"];

    $finalStations = [];

    while (count($statesNeeded) > 0) {
        $bestStation = null;
        $statesCovered = [];
        foreach ($stations as $station => $items) {
            $covered = array_intersect($items, $statesNeeded);
            var_dump($covered);
            if (count($covered) > count($statesCovered)) {
                $bestStation = $station;
                $statesCovered[] = $covered;
            }
        }
        foreach ($statesCovered as $value) {
            if (in_array($statesNeeded, $value)) {
                $index = array_search($statesNeeded, $value);
                unset($statesNeeded[$index]);
            }
        }
        $finalStations[] = $bestStation;
    }
    return $finalStations;
}

echo greed();
