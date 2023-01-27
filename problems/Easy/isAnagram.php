<?php
/*
Given two strings s and t, return true if t is an anagram of s, and false otherwise.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.
*/
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
 function isAnagram($s, $t)
 {
    // nlogn
    if(strlen($s) != strlen($t))
    return false;
    $stringS = str_split($s);
    $stringT = str_split($t);
     sort($stringS);
     sort($stringT);
     //strcmp return 0 when two string are equal
     if (strcmp(implode($stringS), implode($stringT)) !== 0) {
        return false;
    }
    else {
        return true;
    }

    return false;
 }

 echo isAnagram("rat", "car");