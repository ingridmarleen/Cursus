<?php
function fib ($n) { 
    
    /* Fibonacci reeks gaat als volgt:
     * F(n) = F(n-1) + F(n-2)
     * Reeks zo lang mogelijk maken.
     */
    
    if($n==0) {
        return 0;
    }
    
    elseif ($n == 1 || $n == 2) { 
        return 1; 
    }
    else { 
        return fib ($n - 1) + fib ($n - 2); 
    }
   }
        echo fib(20);
        /* Hoe hoger dit getal hoe langer deze functie
         * duurt omdat de functie zichzelf blijft
         * herhalen tot het antwoord.
         */
?>