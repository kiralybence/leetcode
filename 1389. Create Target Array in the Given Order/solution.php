<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) {
        $ret = [];
        
        foreach ($nums as $i => $num) {
            array_splice($ret, $index[$i], 0, $num);
        }
        
        return $ret;
    }
}