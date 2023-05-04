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
        return  $this->titolo  . ' - ' . $this->anno . ' - ' . $this->attori . ' ' . $this->getGeneres() ;
    }

    public function getGeneres() {

        $generi = '';
        /* un altro esempio con la classe Genere
        foreach( $this->genere as $gener ) {
            $generi .= $genere->genere1. ', ' . $genere->genere2. ', ' .$genere->genere3;
        }*/
        foreach( $this->genere as $gener ) {
            $generi .= '-' . $gener . '';
        }

        return $generi;

    }

};