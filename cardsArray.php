<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // hiërarchie: kaarten -> kleur -> nummer
        
            $cards = array(
                'red' => array(1,2,3,4),
                'blue' => array(1,2,3,4),
                'green' => array(1,2,3,4),
                'yellow' => array(1,2,3,4),
            );
            
            //print de array op scherm
            print_r($cards);
        ?>
    </body>
</html>
