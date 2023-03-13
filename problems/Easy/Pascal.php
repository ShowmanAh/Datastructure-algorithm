<?php

function generate($numRows) {
    $res = [];
    if ($numRows < 2){
        array_push($res, [1]);
    }else{
        array_push($res, [1]);
        array_push($res, [1,1]);
    }
    if ($numRows > 2)
    {
        for ($i=2; $i < $numRows; $i++){
            $sub = [];
            array_push($sub, 1);
            for ($j=0; $j < count($res[$i-1]); $j++){
                $calc = $res[$i-1][$j] + $res[$i-1][$j+1];
                array_push($sub, $calc);
            }
            // array_push($sub, 1);
            array_push($res, $sub);
        }
    }
    return $res;
}
$sdf = generate(5);
var_dump($sdf);