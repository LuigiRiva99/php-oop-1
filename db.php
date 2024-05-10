<?php


@include_once __DIR__ . '/models/production.php';
@include_once __DIR__ . '/models/genre.php';
@include_once __DIR__ . '/models/movie.php';
@include_once __DIR__ . '/models/TVserie.php';

// $harry_potter = new Production('https://static.posters.cz/image/1300/poster/harry-potter-la-pietra-filosofale-i104639.jpg','Harry Potter','IT','8',$fantasy);
// $the_witcher = new Production('https://support.mondadoristore.it/in/speciali/fantasticstore/witcher/locandina3.gif','The Witcher','EN','10',$action);
// $spiderman = new Production('https://m.media-amazon.com/images/I/6193yNvh1RL._AC_UF894,1000_QL80_.jpg','Spiderman','IT','7',$animated);


$products = [$harry_potter,$the_witcher,$spiderman];

header('Content-type: application/json');

echo json_encode($products);

// var_dump($harry_potter) ;
?>