<?php

class Solution {

/**
 * @param String[] $s
 * @return NULL
 */
function reverseString(&$s) {
    $head = 0;
    $tail = count($s) - 1;
    
    for ($i = $head; $i < count($s)/2; $i++) {
        $temp = $s[$head];
        $s[$head] = $s[$tail];
        $s[$tail] = $temp;
        ++$head;
        --$tail;
    }
}
}