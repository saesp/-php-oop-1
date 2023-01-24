<?php

// class Credits
// {
//     public $director;
//     public $producer;
//     public $screenwriter;
// }


// classe
class Movie
{

    // variabili/attributi d'istanza
    public $title;
    public $genre;

    // public Credits $credits;


    // costruttore
    public function __construct($_title, $_genre)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        // $this->credits = $_credits;
    }

    // metodo/funzione
    public function getHtml()
    {
        return 'Movie: ' . $this->title
            . '<br> Genre: ' . $this->genre;

    }
}

// oggetti/istanze
$joker = new Movie('Joker', 'Crime');
$cmbyn = new Movie('Call Me By Your Name', 'Romantic');

echo $joker->getHtml() . '<br><br>';

echo $cmbyn->getHtml();