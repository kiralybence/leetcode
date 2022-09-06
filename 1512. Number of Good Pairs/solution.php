<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $goodPairs = 0;
        
        foreach ($nums as $i => $num1) {
            foreach ($nums as $j => $num2) {
                if ($num1 == $num2 && $i < $j) {
                    ++$goodPairs;
                }
            }
        }
        
        return $goodPairs;
    }
}