<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $array = [];
        
        for ($i = 0; $i < count($nums)/2; $i++) {
            $array[] = $nums[$i];
            $array[] = $nums[$i+$n];
        }
        
        return $array;
    }
}