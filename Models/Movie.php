<?php

class Movie {
   public $titolo;
   public $attori;
   public $anno;
   public $genere;

    public function __construct($titolo, $attori, $anno, array $genere)
    {
        $this->titolo = $titolo;
        $this->attori = $attori;
        $this->anno = $anno;
        $this->genere = $genere;
    }

    public function getInformazioniFilm() {
        return 'Titolo: '. $this->titolo  . 
        ' <br/> Anno: ' . $this->anno . 
        '<br/> Attori: ' . $this->attori . 
        '<br/> Genere: ' . $this->getGeneres() ;
    }

    public function getGeneres() {

        $generi = '';
       
        foreach( $this->genere as $gener ) {
            $generi .= $gener->genere1. ', ' . $gener->genere2. ', ' .$gener->genere3;
        }
        /* bonus 1 array senza la classe
        foreach( $this->genere as $gener ) {
            $generi .= '-' . $gener . '';
        }
        */
        return $generi;

    }

};