<?php 
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "mp3shop";

try{
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "DELETE FROM klant WHERE naam = 'Fernando van Maurik'";
    // use exec() because no results are returned
    $conn ->exec($sql);
    echo "Record deleted successfully";
} 
catch (PDOException $ex) {
    echo $sql . ",br />" . $ex -> getMessage();
}

$conn = null;
?> 