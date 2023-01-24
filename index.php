<?php

// Classe
class Movie
{
    // Variabili/Attributi d'istanza
    public $title;
    public $genre;


    // Costruttore
    public function __construct($_title, $_genre)
    {
        $this->title = $_title;
        $this->genre = $_genre;
    }


    // Metodo/Funzione
    public function getHtml()
    {
        return 'Movie: ' . $this->title
            . '<br> Genre: ' . $this->genre;

    }
}

// Oggetti/Istanze
$joker = new Movie('Joker', 'Crime');
$cmbyn = new Movie('Call Me By Your Name', 'Romantic');

echo '1 <br>' . $joker->getHtml()
    . '<br><br>';
echo '2 <br>' . $cmbyn->getHtml();