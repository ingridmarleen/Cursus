<?php

    class Film
    {
        public $titel;
        public $regisseur;
        public $speelduur;
        public $genre;
        
        function __construct($titel, $regisseur, $speelduur, $genre)
        {
            $this->titel        = $titel;
            $this->regisseur    = $regisseur;
            $this->speelduur    = $speelduur;
            $this->genre        = $genre;
            
            echo "Film object $titel is aangemaakt" . "<br />";
        }
        
        function __destruct() 
        {
            echo "Film object $this->titel wordt verwijderd" . "<br />";
        }
    }
    
?>

