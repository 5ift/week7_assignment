<!DOCTYPE html>
<html leng="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>

<body>
    <?php
    require("saledata.php");
    require("payment.php");

    $sale = new SaleData();
    $aba = new ABA(); 
    $wing = new WING(); 
    $pipay = new PIPAY(); 

    $aba->payment(new Transaction("item1",5,1,"ABA"), $sale);
    $wing->payment(new Transaction("item2", 3,2,"WING"), $sale);
    $aba->payment(new Transaction("item3",4,1,"ABA"), $sale);
    $aba->payment(new Transaction("item4",5,1,"ABA"), $sale);
    $pipay->payment(new Transaction("item5",6,1,"PIPAY"), $sale);
    $aba->payment(new Transaction("item6",10,1,"ABA"), $sale);
    $wing->payment(new Transaction("item7", 15,1,"WING"), $sale); 
    $wing->payment(new Transaction("item8", 2,1,"WING"), $sale); 

    echo "Number of sales by ABA : " . " " . $sale->displayABA() . "\n";
    echo "Number of sales by WING and PIPAY : " . " " . $sale->displayWingPipay() . "\n"; 
    $sale->displayOrdering()

    ?>
</body>

</html>