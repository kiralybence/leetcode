<?php

class ParkingSystem {
    private $bigs = 0;
    private $mediums = 0;
    private $smalls = 0;
    
    private $bigLimit = 0;
    private $mediumLimit = 0;
    private $smallLimit = 0;
    
    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small) {
        $this->bigLimit = $big;
        $this->mediumLimit = $medium;
        $this->smallLimit = $small;
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        switch ($carType) {
            case 1:
                if ($this->bigs < $this->bigLimit) {
                    $this->bigs++;
                    return true;
                } else {
                    return false;
                }
            case 2:
                if ($this->mediums < $this->mediumLimit) {
                    $this->mediums++;
                    return true;
                } else {
                    return false;
                }
            case 3:
                if ($this->smalls < $this->smallLimit) {
                    $this->smalls++;
                    return true;
                } else {
                    return false;
                }
            default:
                break;
        }
    }
}

/**
 * Your ParkingSystem object will be instantiated and called as such:
 * $obj = ParkingSystem($big, $medium, $small);
 * $ret_1 = $obj->addCar($carType);
 */