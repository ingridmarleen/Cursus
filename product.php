<?php
    
    include_once ("product.class.php");
    include_once ("shoppingcard.class.php");
    
    $product1 = new Product("001", "laptop", "Toshiba", "Satelite", 999.99, 10, true);
    $product1->printProductInfo();
    $product2 = new Product("002", "laptop", "Acer", "Aspire", 1099.99, 5, true);
    $product2->printProductInfo();
    
    $myShoppingcard = new MyShoppingcard();
    $myShoppingcard->addToCard($product1);
    $myShoppingcard->addToCard($product2);
    $myShoppingcard->printOverzicht();    

?>