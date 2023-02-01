<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
 function isSubsquence($s, $t)
 {
    if(!strlen($s)) // all data contain 0
    return true;
    if(strlen($s) > strlen($t))
    return false;
    $j=0;
    $i = 0;

   for($i=0; $i < strlen($t); $i++)
   {
    
      if($s[$j] == $t[$i]){
       if(++$j==strlen($s))
        return true;
      }

 }

 return false;
 }
 echo isSubsquence("abc", "ahbgdc");