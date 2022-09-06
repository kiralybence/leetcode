<?php

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words) {
        $trans = function ($word) {
            $morseAlphabet = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
            $realAlphabet = range('a', 'z');

            $morseWord = '';

            foreach (str_split($word) as $char) {
                $key = array_search($char, $realAlphabet);
                $morseWord .= $morseAlphabet[$key];
            }

            return $morseWord;
        };
        
        $words = array_map($trans, $words);
        
        return count(array_unique($words));
    }
    
}