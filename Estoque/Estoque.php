<?php
namespace Estoque;

class Estoque {
    private $total;
    
    public function __construct() {
        $this->total = rand(0, 1000);
    }
    
    function getTotal() {
        return $this->total;
    }


}
