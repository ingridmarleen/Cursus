<?php
    // fibonacci is een reeks
    $fib = array(0,1);
    // $fib[2] = $fib[0] + $fib[1];
    
    /* Fibonacci reeks gaat als volgt:
     * F(n) = F(n-1) + F(n-2)
     * Reeks zo lang mogelijk maken.
     */
    for ($i = 2; $i <= 999999; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    
    // vul hier een waarde in voor $i
    echo $fib[$i];
    
?>

