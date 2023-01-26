<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
function containsDuplicate(array $nums)
{
    //complexity o(n)
  $set = [];

   for ($i=0; $i < count($nums) ; $i++) { 
    if (in_array($nums[$i], $set)) {
        
        return true;
    }
    $set[] = $nums[$i];
   }
   return false;
}

function isContainsDuplicate(array $nums)
{
    //complexity nlog(n)
  $uniqueSet = array_unique($nums);
  $count_origin_array = count($nums);
  $count_unique_array = count($uniqueSet);
   if($count_unique_array == $count_origin_array){
    return false;
   }else{
    return true;
   }
}
echo isContainsDuplicate([1,2,3,1]);