<?php

class Solution {

    /**
     * @param Integer[] $encoded
     * @param Integer $first
     * @return Integer[]
     */
    function decode($encoded, $first) {
        $decoded = [$first];
        
        foreach ($encoded as $i => $num) {
            $decoded[] = $decoded[$i] ^ $num;
        }
        
        return $decoded;
    }
}