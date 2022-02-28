<?php
class Spettacolo{

    private $titolo;
    private $orario;
    private $postiLiberi;
    private $durata;
    private $regista;
    private $cast = [];

    public function __construct($_titolo, $_orario, $_biglietti, $_durata, $_regista, $_cast)
    {
        $this->titolo = $_titolo;
        $this->orario = $_orario;
        $this->postiLiberi = (350 - $_biglietti);
        $this->durata = $_durata;    
        $this->regista = $_regista;
        $this->cast = $_cast;
    }

    public function getSala()
    {
        return "{$this->titolo} {$this->orario} {$this->postiLiberi} {$this->durata} {$this->regista} {$this->cast}";
    }

    

}
