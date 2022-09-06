<?php

class CustomStack {
    private $maxSize;
    private $values = [];
    
    /**
     * @param Integer $maxSize
     */
    function __construct($maxSize) {
        $this->maxSize = $maxSize;
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        if (count($this->values) < $this->maxSize) {
            $this->values[] = $x;
        }
    }
  
    /**
     * @return Integer
     */
    function pop() {
        return !empty($this->values)
            ? array_pop($this->values)
            : -1;
    }
  
    /**
     * @param Integer $k
     * @param Integer $val
     * @return NULL
     */
    function increment($k, $val) {
        $i = 0;
        while ($i < $k) {
            if (isset($this->values[$i])) {
                $this->values[$i] += $val;
            }
            $i++;
        }
    }
}

/**
 * Your CustomStack object will be instantiated and called as such:
 * $obj = CustomStack($maxSize);
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $obj->increment($k, $val);
 */