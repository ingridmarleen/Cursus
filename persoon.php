<?php
    include_once ('persoon.class.php');

    echo "<!DOCTYPE HTML>
            <html lang=\"nl\">
            <head>
                <meta name=\"author\" content=\"Ingrid van den Boom\">
                <title>OOP in PHP - Klasse Persoon</title>
            </head>
            <body>

            </body>
            </html>";

    $jan = new Persoon("Jan", 18, "man");
    
    $truus = new Persoon("Truus", 20, "vrouw");
    
    $renee = new Persoon("Renee", 21, "man");

    $thara = new Persoon("Thara", 19, "vrouw");
    
    $thara->setLeeftijd("twintig");
    $thara->setNaam(12345);
    
    echo "<br /> De leeftijd van Jan is: " . $jan->getLeeftijd();
    echo "<br /> De leeftijd van Thara is: " . $thara->getLeeftijd();
    
    $thara->printGegevens();
    $jan->printGegevens();
    
    $user1 = new User("Shireen", 22, "vrouw", "shireen@gmail.com", "Uh65Tg", true);
    echo "<br />Naam van user1 is: " . $user1->getNaam();
    
    $user1->printGegevens();
    
?>
