<?php

function fib($n){
    $f1 = 0;
    $f2 = 1;
    
    for($i = 2; $i <= $n; $i++){
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
      }
   return $f3;
}
echo fib(2);
?>



