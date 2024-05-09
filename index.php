<?php

//creo classe Production
class Production {

    public $title;
    public $language;
    public $vote;

    //construct
    function __construct($_title,$_language,$_vote)
    {
        $this->title = $_title;
        $this->language = $_language;
        //verifico che $_vote sia un numero e che sia tra 0 e 10
        if (is_numeric($_vote) && (0 <= $_vote && $_vote <= 10) ){
            $this->vote = $_vote;
        } else {
            $this->vote = rand(0,10);
        }
        
    }

};

$harry_potter = new Production('Harry Potter','IT','8');
$the_witcher = new Production('The Witcher','EN','10')

// var_dump($harry_potter) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>  
        <section>
            <div>
                <p> <?php echo $harry_potter->title ?> </p>
                <p> <?php echo $harry_potter->language ?> </p>
                <p> <?php echo $harry_potter->vote ?> </p>
            </div>
            <div>
                <p> <?php echo $the_witcher->title ?> </p>
                <p> <?php echo $the_witcher->language ?> </p>
                <p> <?php echo $the_witcher->vote ?> </p>
            </div>
        </section>
    </main>
</body>
</html>
