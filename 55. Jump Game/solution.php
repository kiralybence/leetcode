<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $lastGoodIndexPosition = count($nums) - 1;
        
        for ($i = $lastGoodIndexPosition; $i >= 0; $i--) {
            if ($i + $nums[$i] >= $lastGoodIndexPosition) {
                $lastGoodIndexPosition = $i;
            }
        }
        
        return $lastGoodIndexPosition == 0;
    }
}