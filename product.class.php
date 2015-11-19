<?php

class Product
{
    private $_id;
    private $_beschrijving;
    private $_merk;
    private $_model;
    private $_prijs;
    private $_aantal;
    private $_korting;
    
    function __construct($id, $beschrijving, $merk, $model, $prijs, $aantal, $korting) 
    {
        $this->_id = $id;
        $this->_beschrijving = $beschrijving;
        $this->_merk = $merk;
        $this->_model = $model;
        $this->_prijs = $prijs;
        $this->_aantal = $aantal;
        $this->_korting = $korting;
        
        echo "<br />Nieuw Product object $beschrijving wordt aangemaakt";
    }
    
    function setId($id) 
    {
        $this->_id = $id;
    }
    
    function getId()
    {
        return $this->_id;
    }
    
    function setBeschrijving($beschrijving) 
    {
        $this->_beschrijving = $beschrijving;
    }
    
    function getBeschrijving()
    {
        return $this->_beschrijving;
    }
    
    function setMerk($merk) 
    {
        $this->_merk = $merk;
    }
    
    function getMerk()
    {
        return $this->_merk;
    }
    
    function setModel($model) 
    {
        $this->_model = $model;
    }
    
    function getModel()
    {
        return $this->_model;
    }
    
    function setPrijs($prijs) 
    {
        $this->_prijs = $prijs;
    }
    
    function getPrijs()
    {
        return $this->_prijs;
    }
    
    function setAantal($aantal) 
    {
        $this->_aantal = $aantal;
    }
    
    function getAantal()
    {
        return $this->_aantal;
    }
    
    function setKorting($korting) 
    {
        $this->_korting = $korting;
    }
    
    function getKorting()
    {
        return $this->_korting;
    }
    
    public function printProductInfo()
    {
        $rij = "<tr>
                    <td>$this->_id</td>
                    <td>$this->_beschrijving()</td>
                    <td>$this->_merk()</td>
                    <td>$this->_model()</td>
                    <td>$this->_prijs()</td>
                    <td>$this->_aantal()</td>
                    <td>$this->_korting()</td>
                </tr>";

        echo $rij;
    }
        
    function __destruct() 
    {
        echo "<br />Product object $this->_beschrijving wordt verwijderd";
    }
}



?>

