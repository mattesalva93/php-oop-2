<?php

class Spettacolo {
    private $data;
    private $ora;
    private $film;
    private $sala;

    public function __construct($_data, $_ora, $_film, $_sala)
    {
        $this->data = $_data;
        $this->ora = $_ora;
        $this->film = $_film;
        $this->sala = $_sala;
    }

    public function getData()
    {
       return $this->data;
    }

    public function getFilm()
    {
       return $this->film;
    }

    public function getOra()
    {
       return $this->ora;
    }

}

