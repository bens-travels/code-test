<?php

abstract class Computer {
    private $isBooting = false;
    private $bootTime = 5;

    public function powerOn() {
        echo "POWER ON..." . PHP_EOL;
        $this->bootOs();
    }

    public function isBooting() {
        if( $this->isBooting ) {
            return "BOOTING";
        }
        return "NOT BOOTING";
    }

    private function bootOs() {
        $this->isBooting = true;
        $i = 0;

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
        $this->powerOn();
    }
}

$mac = new Mac();
var_dump( $mac->isBooting );
new Computer();