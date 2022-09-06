<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $ret = '';
        
        foreach (str_split(trim($s)) as $char) {
            if (is_numeric($char) || $char == '-' || $char == '+') {
                $ret .= $char;
            } else {
                break;
            }
        }
        
        if (empty($ret) || strpos($ret, '+-') !== false) {
            return 0;
        }
        
        $ret = (int) $ret;
        
        if ($ret <= 2147483647 && $ret >= -2147483648) {
            return $ret;
        } elseif ($ret > 2147483647) {
            return 2147483647;
        } elseif ($ret < -2147483648) {
            return -2147483648;
        }
    }
}