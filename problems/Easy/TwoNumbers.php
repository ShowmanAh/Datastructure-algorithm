<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//(nlog n)
function twoNumber(array $array, int $target){
    sort($array);
  
    $right = count($array) -1;
    while ($left < $right){
        $sumCurrent = $array[$left] + $array[$right];
        if ($sumCurrent == $target)
            return [$array[$left], $array[$right]];
        if($sumCurrent < $target)
            $left++;
        if ($sumCurrent > $target)
            $right++;

    }
    return [];
}
$out = twoNumber([3,5,-4,8,11,-1,6], 10);
var_dump($out);
