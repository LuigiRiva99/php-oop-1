<?php

@include_once __DIR__ . '/models/production.php';
@include_once __DIR__ . '/models/genre.php';

class Movie extends Production{

    public $profits;
    public $duration;
} 

$harry_potter = new Movie('https://static.posters.cz/image/1300/poster/harry-potter-la-pietra-filosofale-i104639.jpg','Harry Potter','IT','8',$fantasy);
$spiderman = new Movie('https://m.media-amazon.com/images/I/6193yNvh1RL._AC_UF894,1000_QL80_.jpg','Spiderman','IT','7',$animated);

$spiderman->profits = 'millemila €';
$spiderman->duration = '120 min';
$harry_potter->profits = 'millemila €';
$harry_potter->duration = '120 min';

?>