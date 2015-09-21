<?php

$hours = 41;
$rate = 15;
$salary_bruto = $hours * $rate;
$bonus = 90;

if ($hours > 40) {
    $salaris = $salary_bruto + $bonus;
    echo 'Uw salaris is: €' . $salaris;
}
else {
    echo 'Uw salaris is €' . $salary_bruto;
}
?>

