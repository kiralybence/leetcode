<?php

class Solution {

    /**
     * @param String $command
     * @return String
     */
    function interpret($command) {
        $command = str_replace('()', 'o', $command);
        $command = str_replace('(al)', 'al', $command);
        
        return $command;
    }
}