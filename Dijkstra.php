<?php

$GLOBALS['processed'] = [];

function dijk()
{
    $graph = [];

    $graph['start'] = [];
    $graph['start']['a'] = 6;
    $graph['start']['b'] = 2;

    $graph['a'] = [];
    $graph['a']['fin'] = 1;

    $graph['b'] = [];
    $graph['b']['a'] = 3;
    $graph['b']['fin'] = 5;

    $graph['fin'] = [];

    $parents = [];
    $parents['a'] = 'start';
    $parents['b'] = 'start';
    $parents['fin'] = null;

    $costs = [];
    $costs['a'] = 6;
    $costs['b'] = 2;
    $costs['fin'] = 10000000000000000000000;

    $node = findLowestCostNode($costs);
    while ($node != null) {
        $cost = $costs[$node];
        $neighbors = $graph[$node];
        foreach ($neighbors as $key => $neighborCost) {
            $newCost = $cost + $neighborCost;
            if ($costs[$key] > $newCost) {
                $costs[$key] = $newCost;
                $parents[$key] = $node;
            }
        }
        array_push($GLOBALS['processed'], $node);
        $node = findLowestCostNode($costs);
    }

    return json_encode($parents);
}

function findLowestCostNode(array $costs)
{
    $lowestCost = 10000000000000000000000;
    $lowestCostNode = null;
    foreach ($costs as $key => $cost) {
        if ($cost < $lowestCost && !in_array($key, $GLOBALS['processed'])) {
            $lowestCost = $cost;
            $lowestCostNode = $key;
        };
    }
    return $lowestCostNode;
}

echo dijk();
