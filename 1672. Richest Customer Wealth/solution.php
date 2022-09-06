<?php

class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        // Attempt #1
//         $max = 0;
//         $maxVal = array_sum($accounts[0]);
        
//         foreach ($accounts as $key => $account) {
//             $sum = array_sum($account);
            
//             if ($sum > $maxVal) {
//                 $max = $key;
//                 $maxVal = $sum;
//             }
//         }
        
//         return $maxVal;

        // Attempt #2
//         $sums = [];
        
//         foreach ($accounts as $account) {
//             $sums[] = array_sum($account);
//         }
        
//         return max($sums);
        
        // Attempt #3
        return max(array_map('array_sum', $accounts));
    }
}