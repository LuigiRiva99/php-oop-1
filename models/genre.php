<?php

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

?>