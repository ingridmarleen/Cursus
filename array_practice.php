<?php
    //associative array for a person
    $person = array(
        'LastName' => 'Van den Boom',
        'FirstName' => 'Ingrid',
        'BirthYear' => '1985'
    );
    echo $person [];
    

    //numeric array for employees
    $employees [0] = '1234'; //employee ID
    $employees [1] = 'Pedro'; //first name
    $employees [2] = 'Garcia'; //last name
    
    echo employees [];
    
    //multidimensional array for films
    $films = array(
            'genres' => array(
                'horror',
                'thriller',
                'comedy',
                //etc
            ),
            'film_titles' => array(
                'Scream',
                'Final Destination',
                'Titanic',
                //etc
            ),
            'stars'=> array (
                'Mena Suvari',
                'Bill Murray',
                'Matt Damon',
                //etc
            ),
        );
    
    echo $films [][];   
            
    
            
?>