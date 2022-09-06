<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numberOfMatches($n) {
        $totalMatches = 0;
        
        while ($n > 1) {
            if ($n % 2 == 0) {
                $totalMatches += $n/2;
                $n = $n/2;
            } else {
                $totalMatches += ($n - 1)/2;
                $n = ($n - 1)/2 + 1;
            }
        }
        
        return $totalMatches;
    }
}