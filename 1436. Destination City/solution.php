<?php

class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {
        foreach ($paths as $path) {
            $starts[] = $path[0];
            $ends[] = $path[1];
        }
        
        foreach ($ends as $end)
            if (!in_array($end, $starts))
                return $end;
    }
}