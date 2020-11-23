<?php
function binarySearch($list = [], $item){
$low = 0;
$high = count($list)-1;
while($low <= $high){
    $mid = ($low + $high) / 2;
    $ques = $list[$mid];
    if ($ques === $item) {
        return $mid;
    } 
    if ($ques > $item) {
       $high = $mid - 1; 
    }else{
        $low = $mid + 1;
    }
}
return none;
}
$list = [1,2,3,4,5,6,7];
echo binarySearch($list, 3);
echo 'fg'; 