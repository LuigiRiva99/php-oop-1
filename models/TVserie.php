<?php

@include_once __DIR__ . '/models/production.php';
@include_once __DIR__ . '/models/genre.php';

class TVserie extends Production{

    public $seasons;

    function __construct($_img,$_title,$_language,$_vote,$_genre,$_seasons = 0) 
    {
        parent::__construct($_img,$_title,$_language,$_vote,$_genre);
        $this->seasons = $_seasons;
        
    }
} 

$the_witcher = new TVserie('https://support.mondadoristore.it/in/speciali/fantasticstore/witcher/locandina3.gif','The Witcher','EN','10',$action);

// $the_witcher->seasons = 3;


?>