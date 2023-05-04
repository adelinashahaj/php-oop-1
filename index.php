<?php

class Movie {
   public $titolo;
   public $attori;
   public $anno;
   public $genere;


   
    public function __construct($titolo, $attori, $anno, $genere)
    {
        $this->titolo = $titolo;
        $this->attori = $attori;
        $this->anno = $anno;
        $this->genere = $genere;

    }

    public function getInformazioniFilm() {
        return  $this->titolo  . '  /ANNO DI USCITA:' . $this->anno . '  /ATTORI:' . $this->attori . '  /GENERE:' . $this->genere;
    }

}


$mymovie1 = new Movie('Avengers','Robert Downey Jr', 2015, 'Azione');
var_dump($mymovie1);

echo $mymovie1->getInformazioniFilm(); 

$mymovie2 = new Movie('Capitan America','Chris Avans', 2016, 'Azione');
var_dump($mymovie2);

echo $mymovie2->getInformazioniFilm();