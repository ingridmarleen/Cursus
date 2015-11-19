<?php

    class Persoon
    {
        protected $_naam;
        protected $_leeftijd;
        private $_geslacht;
        
        function __construct($persoonsnaam, $leeftijd, $geslacht)
        {
            $this->_naam = $persoonsnaam;
            $this->_leeftijd = $leeftijd;
            $this->_geslacht = $geslacht;
            echo "<br /> Nieuw Persoon object $persoonsnaam wordt aangemaakt.";
        }
              
        function setLeeftijd($leeftijd)
        {
            if(is_integer($leeftijd))
            {
                $this->_leeftijd = $leeftijd;
            }
            else
            {
                echo "<br /> Datatype error in setLeeftijd() method.";
            }
            
        }
        
        function getLeeftijd()
        {
            return $this->_leeftijd;
        }
        
        function setNaam($persoonsnaam)
        {
            if(is_string($persoonsnaam))
            {
                $this->_naam = $persoonsnaam;
            }
            else
            {
                echo "<br /> Datatype error in setNaam() method.";
            }
        }
        
        function getNaam()
        {
            return $this->_naam;
        }
        
        function setGeslacht($_geslacht) {
            $this->_geslacht = $geslacht;
        }
        
        function getGeslacht() {
            return $this->_geslacht;
        }
                
        public function printGegevens() 
        {
            $gegevens = "<br /> De gegevens van $this->_naam zijn:
                    <br />Leeftijd: $this->_leeftijd
                    <br />Geslacht: $this->_geslacht";
            echo $gegevens;
        }
        
        function __destruct() 
        {
            // voer de benodigde code uit
            echo "<br /> Persoon object $this->_naam wordt verwijderd";
        }
    }
    
    class User extends Persoon
    {
        private $_mail;
        private $_wachtwoord;
        public $nieuweklant;
        
        function __construct($persoonsnaam, $leeftijd, $geslacht, $mail, $wachtwoord, $nieuweklant){
            parent:: __construct($persoonsnaam, $leeftijd, $geslacht);
            $this->_mail = $mail;
            $this->_wachtwoord = $wachtwoord;
            $this->nieuweklant = $nieuweklant;
            
            echo "<br />Nieuw User object $persoonsnaam wordt aangemaakt";
        }
        
        function set_mail($mail) {
            $this->_mail = $mail;
        }
        
        function get_mail() {
            return $this->_mail;
        }

        function set_wachtwoord($wachtwoord) {
            $this->_wachtwoord = $wachtwoord;
        }
        
        function get_wachtwoord() {
            return $this->_wachtwoord;
        }

        function setNieuweklant($nieuweklant) {
            $this->nieuweklant = $nieuweklant;
        }
        
        function getNieuweklant() {
            return $this->nieuweklant;
        }
        
        public function printGegevens() {
            $gegevens = parent::printGegevens();
            $gegevens .= "<br />Email: $this->_mail"
                    . "<br />Wachtwoord: $this->_wachtwoord"
                    . "<br />Nieuwe klant: $this->nieuweklant";
            
            echo $gegevens;
        }
                
        function __destruct(){
            // voer de benodigde acties uit
            echo "<br />Nieuw User extends Persoon";
        }
    }
    
?>

