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
            $geoInfo = array(
                'land' => array(
                    'Nederland' => array(
                        'regio' => array(
                            'Veluwe' => array(
                                'provincie'=> array(
                                    'Gelderland' => array(
                                        'plaats' => array(
                                            'Putten',
                                            'Nijkerk',
                                            // vul hier meer plaatsen in
                                        )
                                    ),
                                    //vul hier meer provincies in
                                )
                            ),
                            //vul hier meerdere regio's in
                        )
                    ),
                    //vul hier andere landen in
                )
            );
            
            //print de array op scherm
            print_r($geoInfo);
        ?>
    </body>
</html>
