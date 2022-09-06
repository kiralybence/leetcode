<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxIncreaseKeepingSkyline($grid) {
        $maxX = [];
        $maxY = [];
        
        foreach ($grid as $x) {
            $maxX[] = max($x);
        }
        
        for ($i = 0; $i < count($grid[0]); $i++) {
            $values = [];
            
            foreach ($grid as $x) {
                $values[] = $x[$i];
            }
            
            $maxY[] = max($values);
        }
        
        $sum = 0;
        
        foreach ($grid as $i => $block) {
            foreach ($block as $j => $building) {
                $sum += min($maxX[$i], $maxY[$j]) - $building;
            }
        }
        
        return $sum;
    }
}