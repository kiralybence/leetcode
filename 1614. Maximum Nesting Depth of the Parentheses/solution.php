<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxDepth($s) {
        $max = 0;
        $depth = 0;
        
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == '(') {
                if (++$depth > $max) {
                    $max = $depth;
                }
            } elseif ($s[$i] == ')') {
                --$depth;
            }
        }
        
        return $max;
    }
}