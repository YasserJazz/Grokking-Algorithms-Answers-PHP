<?php

function matrixRotation($matrix, $r) {
    $startI = 0;
    $endI = count($matrix);
    
    $startJ = 0;
    $endJ = count(current($matrix));
    
    $result = [];
    for($k=0; $k < $r; $k++){
        for($i=$startI; $i<$endI; $i++){
            for($j=$startJ; $j<$endJ; $j++){
                if($i == $endI || $j == $startJ || $i == $startI || $j == $endJ){
                    if($i == $startI && $j != $startJ){
                        $result[$i][$j-1] = $matrix[$i][$j];
                    }
                    if($i == $endI && $j != $endJ){
                        $result[$i][$j+1] = $matrix[$i][$j];
                    }
                    if($i != $endI && $j == $startJ){
                        $result[$i+1][$j] = $matrix[$i][$j];
                    }
                    if($i != $startI && $j == $endJ){
                        $result[$i-1][$j] = $matrix[$i][$j];
                    }
                }
            }
        }
        $startI += 1;
        $endI -= 1;
        
        $startJ += 1;
        $endJ -= 1;
    }
    for($m=0; $m<count($result); $m++){
        $row = '';
        for($n=0; $n<count(current($result)); $n++){
            $row .= $result[$m][$n] . ' ';
        }
        echo $row . "\r\n";
    }
}

$array = [];
$array[] = [1,2,3,4];
$array[] = [5,2,7,4];
$array[] = [11,2,88,4];
$array[] = [1,24,3,4];

matrixRotation($array,1);