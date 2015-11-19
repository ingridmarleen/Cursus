<!DOCTYPE HTML>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>OOP Klasse Film</title>
</head>
<body>
    
</body>
</html>

<?php
    
    include_once ('film.class.php');
    
    $SchindlersList = new Film("Schindler's List", "Stephen Spielberg", "3 uur", "oorlog");
    $LOTR = new Film("Lord of the Rings", "Peter Jackson", "3 uur", "Fantasy");
    
    echo "De speelduur van $LOTR->titel is: $LOTR->speelduur" . "<br />";
    
    $LOTR->speelduur = "200 minuten";
    
    echo "De speelduur van $LOTR->titel is $LOTR->speelduur" . "<br />";

?>
