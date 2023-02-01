<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function lengthOfLastWord($s)
{
    $removeSpace =  trim($s);
    $convertStringToArray = explode(' ', $s);
    return strlen(array_pop($convertStringToArray));
}

echo lengthOfLastWord("   fly me   to   the moon  ");