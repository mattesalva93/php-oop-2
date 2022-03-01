<?php
class Film{
    private $titolo;
    private $durata;
    private $attori;

    public function __construct($_titolo, $_durata, $_attori = [])
    {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->attori = $_attori;
    }

    public function addAttore($_attore)
    {
        $this->attori[] = $_attore;
    }

    public function setAttori($_attori)
    {
        $this->attori[] = $_attori;
    }
    
    public function setTitolo($_titolo)
    {
        $this->titolo = $_titolo;
    }

    public function getDurata()
    {
        return $this->durata;
    }

}
