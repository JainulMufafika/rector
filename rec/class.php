<?php
abstract class Basket extends Database {

    protected $aIndexDesc;
    protected $aReport;
    protected $currency;
    protected $deliveryRange; 
    public $dateSelect; 
    public $splitOrders; 
    public $allowCombine; 

  

    public function Basket() {
        $this->Database();
        $this->aReport = new ArrayBase();
        $this->deliveryRange = array();
        $this->deliveryList = array();
       	$this->oDigital= new stdClass();
    }
}
