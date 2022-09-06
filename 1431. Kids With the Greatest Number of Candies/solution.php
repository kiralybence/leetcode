<?php

class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $max = max($candies);
        $retval = [];
        
        foreach ($candies as $candy) {
            $retval[] = $candy + $extraCandies >= $max;
        }
        
        return $retval;
    }
}