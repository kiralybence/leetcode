<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        foreach ($nums as $i => $num) {
            if ($nums[$i] === $nums[$i+1]) {
                unset($nums[$i]);
            }
        }
    }
}