<?php

abstract class Computer {
    private $isTurnedOn = false;
    private $isBooting = false;
    private $bootTime = 5;

    public function powerOn() {
        $this->isTurnedOn = true;
        echo "POWER ON..." . PHP_EOL;
        $this->bootOs();
    }

    public function getIsBooting() {
        if( $this->isBooting ) {
            return "BOOTING";
        }
        return "NOT BOOTING";
    }

    private function bootOs() {
        $this->isBooting = true;
        $i = 1;

        do {
            echo "BOOTING..." . PHP_EOL;
            $i++;
        } while ( $i <= $this->bootTime );

        $this->isBooting = false;
    }
}

class Mac extends Computer {
    function __construct() {
        echo "BONG!" . PHP_EOL;
    }
}

$mac = new Mac();
$mac->powerOn();
echo $mac->getIsBooting() . PHP_EOL;