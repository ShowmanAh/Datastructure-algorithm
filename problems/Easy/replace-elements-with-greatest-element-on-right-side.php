<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
function solutions($list)
{
    if(count($list) == 0)
    return [];
    $replacedArray = [];
    $i = 0;
    while ($i < count($list)) {
        $replacedArray[$i] = maxElement($i, $list);
        $i++;
    }
    
    $replacedArray[count($list)-1] = -1;
    return $replacedArray;
    
}

function maxElement($index, $list)
{
    $max = 0;
     for ($i = $index+1 ; $i < count($list); $i++) { 
        $max = max($max, $list[$i]);
    }
    return $max;
}
$arr = solutions([17,18,5,4,6,1]);
print_r($arr);