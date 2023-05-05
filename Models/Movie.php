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

        $generi = [];
       
        foreach( $this->genere as $gener ) {
            $generi[] = $gener->nome;
        }
        /* array senza la classe
        foreach( $this->genere as $gener ) {
            $generi .= '-' . $gener . '';
        }
        */
        return implode(',', $generi);

    }

};