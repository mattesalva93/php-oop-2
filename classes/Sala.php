<?php
class Sala
{
    protected $nome;
    protected $display;
    protected $capienza;

    public function __construct($_nome, $_display, $_capienza)
    {
        $this->nome = $_nome;
        $this->display = $_display;
        $this->capienza = $_capienza;
    }

    public function getInfo()
    {
        return "{$this->nome} [{$this->capienza}]";
    }

    public function getCapienza()
    {
       return $this->capienza;
    }


}
