<?php

//creo classe Production
class Production {
    public $img;
    public $title;
    public $language;
    public $vote;
    public $genre;

    //construct
    function __construct($_img,$_title,$_language,$_vote,$_genre)
    {
        $this->img = $_img;
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote($_vote);
        $this->setGenre($_genre);
    }

    //method per il voto 
    public function setVote(int $my_vote)
    {
        //verifico che $my_vote sia un numero e che sia tra 0 e 10
        if (is_numeric($my_vote) && (0 <= $my_vote && $my_vote <= 10) ){
            $this->vote = $my_vote;
        } else {
            $this->vote = rand(0,10);
        }   
    }

    public function setGenre(Genre $my_genre)
    {
        $this->genre = $my_genre;
    }

};

class Genre {
    public $name;
    public $description;

    function __construct($_name,$_des)
    {
        $this->name = $_name;
        $this->description = $_des;
    }
}

$action = new Genre('Action', 'Si picchiano di brutto');
$fantasy = new Genre('Fantasy', 'Abracadabra');
$animated = new Genre('Animato', 'Bellissimissimo');

$harry_potter = new Production('https://static.posters.cz/image/1300/poster/harry-potter-la-pietra-filosofale-i104639.jpg','Harry Potter','IT','8',$fantasy);
$the_witcher = new Production('https://support.mondadoristore.it/in/speciali/fantasticstore/witcher/locandina3.gif','The Witcher','EN','10',$action);
$spiderman = new Production('https://m.media-amazon.com/images/I/6193yNvh1RL._AC_UF894,1000_QL80_.jpg','Spiderman','IT','7',$animated);


$products = [$harry_potter,$the_witcher,$spiderman];

header('Content-type: application/json');

echo json_encode($products);

// var_dump($harry_potter) ;
?>