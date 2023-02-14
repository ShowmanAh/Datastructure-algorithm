<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
function longestCommonPrefix($strs) {
        if (count($strs)==0) {
             return  '';
        }
        $str1 = $strs[0];
        $newStr = [];
        for ($i=0; $i < strlen($str1); $i++) { 
            for ($j=count($strs)-1; $j > 0 ; $j++) { 
              if ($str1[$i] != $strs[$j][$i]) {
                 return "";
              }
              array_push($newStr);
            }
        }
        return implode($newStr);
}

echo longestCommonPrefix(["flower","flow","flight"]);