<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $sums = [];
        $helper = 0;
        
        foreach ($nums as $num) {
            $helper += $num;
            $sums[] = $helper;
        }
        
        return $sums;
    }
}