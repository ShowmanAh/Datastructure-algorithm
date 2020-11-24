<?php
/*
binarySearch implementing in sorted list only any search should sorted list for checking and use logn
if not sorted can't be divided it will lop on every element
 if 100 item simple search will take o(n) maximum nuber of guessing wil take 100 step 
 but in binary search will take O(logn) Maximum number of quessing will take 7 steps
 Big O notation tells you how fast an algorithm
 - lets you compare the number of operations. It
   tells you how fast the algorithm grows.
   Some common Big O run times
Here are five Big O run times that you’ll encounter a lot, sorted from
fastest to slowest:
• O(log n), also known as log time. Example: Binary search.
• O(n), also known as linear time. Example: Simple search.
• O(n * log n). Example: A fast sorting algorithm, like quicksort
(coming up in chapter 4).
• O(n2). Example: A slow sorting algorithm, like selection sort
(coming up in chapter 2).
• O(n!). Example: A really slow algorithm, like the traveling
salesperson (coming up next!)
**/
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
function smallest($arr = []){
    $smallest = $arr[0];
    $smallIndex = 0;
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] < $smallest){
            $smallest = $arr[$i];
            $smallIndex = $i;
        }
    }
    return $smallIndex;
}
function selectionSort($arr = []){
    $newArr = [];
    for($i = 0; $i < count($arr); $i++){
       $smallest = smallest($arr);
      // $p = array_pop($smallest);
       array_push($newArr, $smallest);
    
    }
    return $newArr;
}
$sort = selectionSort([5, 3, 6, 2, 10]);
echo smallest([5, 3, 6, 2, 10]);
foreach ($sort as $key => $value) {
    echo $value;
}
$list = [1,2,3,4,5,6,7];
echo binarySearch($list, 3);
echo 'fg'; 