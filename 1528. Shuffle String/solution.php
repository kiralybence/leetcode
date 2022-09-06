<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $old = str_split($s);
        $new = [];
        
        foreach ($old as $i => $char) {
            $new[$indices[$i]] = $char;
        }
        
        ksort($new);
        $new = implode('', $new);
        
        return $new;
    }
}