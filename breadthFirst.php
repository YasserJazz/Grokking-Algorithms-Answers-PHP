<?php


function isMangoSeller($susbectedSeller)
{
    return strlen($susbectedSeller) == 5;
}

function searchMangoSeller($name)
{
    $graph = [];
    $graph['yasser'] = ['alaa', 'abd', 'mom'];
    $graph['alaa'] = ['saed', 'rawan'];
    $graph['saed'] = ['flutter'];
    $graph['abd'] = [];
    $graph['mom'] = [];
    $graph['rawan'] = [];
    $graph['flutter'] = [];

    $search_queue = [];
    $search_queue += $graph[$name];
    $searched = [];

    while (count($search_queue) > 1) {
        $searching = array_shift($search_queue);
        if (!in_array($searching, $searched)) {
            if (isMangoSeller($searching)) {
                return $searching;
            } else {
                foreach ($graph[$searching] as $value) {
                    array_push($search_queue, $value);
                }
                array_push($searched, $searching);
            }
        }
    }
    echo 'false';
    return false;
}

echo searchMangoSeller('yasser');
