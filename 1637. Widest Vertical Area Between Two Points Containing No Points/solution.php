<?php

class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points) {
        $xs = [];
        
        foreach ($points as $point) {
            $xs[] = $point[0];
        }
        
        sort($xs);
        
        $gaps = [];
        
        foreach ($xs as $i => $x) {
            if (isset($xs[$i+1])) {
                $gaps[] = $xs[$i+1] - $x;
            }
        }
        
        return max($gaps);
    }
}