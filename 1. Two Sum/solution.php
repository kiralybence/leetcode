<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $i => $num1) {
            foreach ($nums as $j => $num2) {
                if ($num1 + $num2 == $target && $i != $j) {
                    return [$i, $j];
                }
            }
        }
    }
}