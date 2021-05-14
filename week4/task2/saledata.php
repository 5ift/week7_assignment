<?php

require("info.php");
class SaleData {
    private $ordersdata = [];
    public function addtosale(Transaction $transaction){
        $this->ordersdata[] = $transaction; 
    }
    public function displayTransaction($method){
        $count = 0; 
        for($i = 0; $i < count($this->ordersdata); $i++){
            if($this->ordersdata[$i]->method() == $method){
                $count += 1;
            }
        }
        return $count; 
    }
    public function displayABA() {
        return $this->displayTransaction("ABA");
    }
    public function displayWingPipay(){
        return $this->displayTransaction("WING") + $this->displayTransaction("PIPAY"); 
    }
    public function displayOrdering(){
        usort($this->ordersdata, function($a, $b) {
            if($a->getTotalPerOrder()==$b->getTotalPerOrder()) return 0;
            return $a->getTotalPerOrder() < $b->getTotalPerOrder()?1:-1;
        });
        echo "
        <table style=\"width:100%;border:1px solid black\">
        <tr >
        <th style=\"border:1px solid black\">Name</th>
        <th style=\"border:1px solid black\">Price</th> 
        <th style=\"border:1px solid black\">Quantity</th>
        <th style=\"border:1px solid black\">Method</th>
        <th style=\"border:1px solid black\">Total</th>
        </tr>"; 

        for($i = 0; $i < count($this->ordersdata); $i++){
            $this->ordersdata[$i]->displayInfo(); 
            echo "<br>" . "\n\n"; 
        }
    }
}

?>