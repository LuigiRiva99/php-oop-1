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
?>