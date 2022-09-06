<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isNumber($s) {
        return is_numeric(trim($s));
    }
}