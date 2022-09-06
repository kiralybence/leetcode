<?php

class Solution {

    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
    function countConsistentStrings($allowed, $words) {
        $allowedChars = str_split($allowed);
        $count = 0;
        
        foreach ($words as $word) {
            $invalid = false;
            
            foreach (str_split($word) as $char) {
                if (!in_array($char, $allowedChars)) {
                    $invalid = true;
                }
            }
            
            if (!$invalid) ++$count;
        }
        
        return $count;
    }
}