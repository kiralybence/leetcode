<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $count = [];
        
        foreach ($nums as $i => $num1) {
            $count[$i] = 0;
            
            foreach ($nums as $j => $num2) {
                if ($num2 < $num1 && $i != $j) {
                    ++$count[$i];
                }
            }
        }
        
        return $count;
    }
}