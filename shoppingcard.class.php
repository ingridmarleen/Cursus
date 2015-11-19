<?php
    
    interface Ishoppingcard
    {
        public function addToCard($product);
        public function printOverzicht();
    }
    
    abstract class Shoppingcard implements Ishoppingcard
    {
        protected $_producten = array();
        
        public function addToCard($product) {
            $this->_producten[] = $product;
        }
    }
    
    class MyShoppingcard extends Shoppingcard
    {
        public function printOverzicht() {
            echo "<table border=1>
                    <tr>
                        <td colspan='7'>Bestellingsoverzicht</td>
                    </tr>
                    <tr>
                        <td>Product ID</td>
                        <td>Beschrijving</td>
                        <td>Merk</td>
                        <td>Model</td>
                        <td>Prijs</td>
                        <td>Aantal</td>
                        <td>Korting</td>
                    </tr>";
            
            foreach($this->_producten as $product)
            {
                $rij = "<tr>
                            <td>".$product->getID()."</td>
                            <td>".$product->getBeschrijving()."</td>
                            <td>".$product->getMerk()."</td>
                            <td>".$product->getModel()."</td>
                            <td>".$product->getPrijs()."</td>
                            <td>".$product->getAantal()."</td>
                            <td>".$product->getKorting()."</td>
                        </tr>";
                
                echo $rij;
            }
            
            echo "</table>";
        }
    }



?>

