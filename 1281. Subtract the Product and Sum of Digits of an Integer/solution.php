<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        $split = str_split((string) $n);
        
        return array_product($split) - array_sum($split);
    }
}