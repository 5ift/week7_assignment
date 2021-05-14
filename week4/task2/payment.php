<?php
abstract class PaymentMethod{
    abstract public function payment(Transaction $transaction, $sale); 
}

class ABA extends PaymentMethod {
    public function payment(Transaction $transaction, $sale){
        $sale->addtosale($transaction); 
    }
}
class WING extends PaymentMethod {
    public function payment(Transaction $transaction, $sale){
        $sale->addtosale($transaction); 
    }
}

class PIPAY extends PaymentMethod {
    public function payment(Transaction $transaction, $sale){
        $sale->addtosale($transaction);  
    }
}