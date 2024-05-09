<?php

//creo classe Production
class Production {
    public $img;
    public $title;
    public $language;
    public $vote;

    //construct
    function __construct($_img,$_title,$_language,$_vote)
    {
        $this->img = $_img;
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote($_vote);
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

};

$harry_potter = new Production('https://static.posters.cz/image/1300/poster/harry-potter-la-pietra-filosofale-i104639.jpg','Harry Potter','IT','8');
$the_witcher = new Production('https://support.mondadoristore.it/in/speciali/fantasticstore/witcher/locandina3.gif','The Witcher','EN','10');
$spiderman = new Production('https://m.media-amazon.com/images/I/6193yNvh1RL._AC_UF894,1000_QL80_.jpg','Spiderman','IT','7');


$products = [$harry_potter,$the_witcher,$spiderman];

header('Content-type: application/json');

echo json_encode($products);

// var_dump($harry_potter) ;
?>