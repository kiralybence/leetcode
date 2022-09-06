<?php

class OrderedStream {
    private $ptr = 1;
    private $len;
    private $arr = [];
    
    /**
     * @param Integer $n
     */
    function __construct($n) {
        $this->len = $n;
    }
  
    /**
     * @param Integer $id
     * @param String $value
     * @return String[]
     */
    function insert($id, $value) {
        $this->arr[$id] = $value;
        $retval = [];
        $skip = 0;
        
        for ($i = $this->ptr; $i <= $this->len; $i++) {
            if (!empty($this->arr[$i])) {
                $retval[] = $this->arr[$i];
                $skip++;
            } else {
                break;
            }
        }
        
        if (!empty($retval)) {
            $this->ptr += $skip;
        }
        
        return $retval;
    }
}

/**
 * Your OrderedStream object will be instantiated and called as such:
 * $obj = OrderedStream($n);
 * $ret_1 = $obj->insert($id, $value);
 */