<?php

class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $count = 0;
        
        foreach (str_split($S) as $S) {
            if (strpos($J, $S) !== false) $count++;
        }
        
        return $count;
    }
}