<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $chars = str_split($s);
        $pos = [];
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        
        for ($i = 0; $i < count($chars); $i++) {
            if (in_array($chars[$i], $vowels)) {
                $pos[] = $i;
            }
        }
        
        $head = 0;
        $tail = count($pos) - 1;
        
        for ($i = $head; $i < count($pos)/2; $i++) {
            $temp = $chars[$pos[$head]];
            $chars[$pos[$head]] = $chars[$pos[$tail]];
            $chars[$pos[$tail]] = $temp;
            ++$head;
            --$tail;
        }
        
        return implode('', $chars);
    }
}