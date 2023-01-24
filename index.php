<?php

// Classe
class Credits
{
    // Variabili/Attributi d'istanza
    public $director;
    public $producer;
    public $screenwriter;

    // Costruttore
    public function __construct($_director, $_producer, $_screenwriter)
    {
        $this->director = $_director;
        $this->producer = $_producer;
        $this->screenwriter = $_screenwriter;
    }

    // Metodo/Funzione
    public function getCredits()
    {
        return '<br> - director:  ' . $this->director
            . '<br> - producer: ' . $this->producer
            . '<br> - screenwriter: ' . $this->screenwriter;
    }
}


// Classe
class Movie
{
    // Variabili/Attributi d'istanza
    public $title;
    public $genre;
    public Credits $credits; // Composizione

    // Costruttore
    public function __construct($_title, $_genre, Credits $_credits)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->credits = $_credits;
    }

    // Metodo/Funzione
    public function getHtml()
    {
        return 'Movie: ' . $this->title
            . '<br> Genre: ' . $this->genre
            . '<br> Credits: ' . $this->credits->getCredits();

    }
}


// Oggetti/Istanze
$creditsJoker = new Credits('Todd Phillips', 'Bradley Cooper', 'Scott Silver');
$creditsCmbyn = new Credits('Luca Guadagnino', 'Peter Spears', '/');

$joker = new Movie('Joker', 'Crime', $creditsJoker);
$cmbyn = new Movie('Call Me By Your Name', 'Romantic', $creditsCmbyn);


echo '1 <br>' . $joker->getHtml()
    . '<br><br>';
echo '2 <br>' . $cmbyn->getHtml();