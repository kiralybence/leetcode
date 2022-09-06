<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function sumOddLengthSubarrays($arr) {
        $len = count($arr);
        $odds = [];
        
        for ($i = 1; $i <= $len; $i++) {
            if ($i % 2 !== 0) {
                $odds[] = $i;
            }
        }
        
        $sums = [];
        
        foreach ($odds as $odd) {
            $start = 0;
            
            while ($start + $odd <= $len) {
                $nums = array_slice($arr, $start, $odd);
                
                // Attempt #1
                // $nums = [];
                // for ($i = $start; $i < $start + $odd; $i++) {
                //     $nums[] = $arr[$i];
                // }
                
                $sums[] = array_sum($nums);
                
                ++$start;
            }
        }
        
        return array_sum($sums);
    }
}