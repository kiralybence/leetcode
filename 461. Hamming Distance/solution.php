<?php

class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y) {
        $x = decbin($x);
        $y = decbin($y);
        
        while (strlen($x) < 64) $x = '0'.$x;
        while (strlen($y) < 64) $y = '0'.$y;
        
        // var_dump($x);
        // var_dump($y);
        
        $count = 0;
        for ($i = 0; $i < strlen($x); $i++) {
            if ($x[$i] !== $y[$i]) ++$count;
        }
        
        return $count;
    }
}