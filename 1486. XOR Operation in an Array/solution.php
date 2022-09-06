<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer $start
     * @return Integer
     */
    function xorOperation($n, $start) {
//         $nums = [];
        
//         for ($i = 0; $i < $n; $i++) {
//             $nums[$i] = $start + 2*$i;
//         }
        
//         $ret = 0;
        
//         foreach ($nums as $num) {
//             $ret ^= $num;
//         }
        
//         return $ret;
        
        $ret = 0;
        
        for ($i = 0; $i < $n; $i++) {
            $ret ^= $start + 2*$i;
        }
        
        return $ret;
    }
}