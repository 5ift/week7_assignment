<?php

class Transaction {
    private $name; 
    private $price;
    private $quantity; 
    private $method; 
    private $totalPerOrder; 
    public function __construct($name, $price,$quantity,$method){
        $this->name = $name; 
        $this->price = $price;  
        $this->quantity = $quantity; 
        $this->method = $method;
        $this->totalPerOrder = $price * $quantity;
    }
    public function getTotalPerOrder(){
        return $this->totalPerOrder; 
    }
    public function method(){
        return $this->method; 
    }
    public function displayInfo(){
        echo "<tr>
             <td style=\"border:1px solid black\">$this->name</td>
             <td style=\"border:1px solid black\">$this->price</td>
             <td style=\"border:1px solid black\">$this->quantity</td>
             <td style=\"border:1px solid black\">$this->method</td>
             <td style=\"border:1px solid black\">$this->totalPerOrder</td>
             </tr>"; 
    }
}

?>