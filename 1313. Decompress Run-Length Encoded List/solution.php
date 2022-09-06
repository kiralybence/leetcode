<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function decompressRLElist($nums) {
        $ret = [];
        
        for ($i = 0; $i < count($nums); $i += 2) {
            for ($j = 0; $j < $nums[$i]; $j++) {
                $ret[] = $nums[$i+1];
            }
        }
        
        return $ret;
    }
}