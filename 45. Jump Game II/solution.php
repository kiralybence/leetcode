<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums) {
        $len = count($nums);
        $jumps = 1;
        
        if ($len == 1) {
            return 0;
        }
        
        // Put the pointers at the beginning
        $furthest = $nums[0]; // The furthest we can potentially reach
        $currEnd = $nums[0]; // The furthest we can currently jump
        
        for ($i = 1; $i < $len; $i++) {
            // We've reached the end
            if ($i == $len - 1) {
                return $jumps;
            }
            
            // Is this position further than our previous furthest reach?
            // (choose the bigger number)
            $furthest = max($furthest, $i + $nums[$i]);
            
            // If we've gone through all jumpables
            if ($i == $currEnd) {
                ++$jumps;
                $currEnd = $furthest; // Jump to the furthest reach
            }
        }
        
        return $jumps;
    }
}