<?php
require_once __DIR__ . '/Sala.php';

class Salaimmersiva extends Sala
{
    private $effetti;

    public function __construct($_nome, $_display, $_capienza, $_effetti = [])
    {
        parent::__construct($_nome, $_display, $_capienza);
        $this->effetti = $_effetti;
    }

    public function getInfo()
    {
        return "{$this->nome} [{$this->capienza} / {count($this->effetti)}]";
    }
}
