<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $retval = [-1, -1];
        
        foreach ($nums as $key => $num) {
            if ($num == $target) {
                if ($retval[0] == -1) {
                    $retval[0] = $key;
                }
                
                $retval[1] = $key;
            }
        }
        
        return $retval;
    }
}