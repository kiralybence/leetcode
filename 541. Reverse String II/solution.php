<?php

class Solution {

/**
 * @param String $s
 * @param Integer $k
 * @return String
 */
function reverseStr($s, $k) {
    $chars = str_split($s);
    $chunks = array_chunk($chars, 2*$k);
    
    foreach ($chunks as &$chunk) {
        // Separate into two parts
        $chosen = array_slice($chunk, 0, $k);
        $rest = array_slice($chunk, $k);
        
        // Reverse
        $chosen = array_reverse($chosen);
        
        // Re-attach
        $chunk = array_merge($chosen, $rest);
    }
    
    // Merge all chunks into one
    $chars = call_user_func_array('array_merge', $chunks);
    
    // Turn array back into a string
    return implode('', $chars);
}
}