<?php

@include_once __DIR__ . '/models/production.php';
@include_once __DIR__ . '/models/genre.php';

class TVserie extends Production{

    public $seasons;
} 

$the_witcher = new TVserie('https://support.mondadoristore.it/in/speciali/fantasticstore/witcher/locandina3.gif','The Witcher','EN','10',$action);

$the_witcher->seasons = 3;


?>