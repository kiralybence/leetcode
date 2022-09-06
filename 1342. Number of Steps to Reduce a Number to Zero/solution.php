<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps ($num) {
        while ($num > 0) {
            if ($num % 2 == 0)
                $num /= 2;
            else
                $num--;

            $count++;
        }
        
        return $count;
    }
}