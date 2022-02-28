<?php
class Salaimmersiva extends Sala
{
    private $effetti = [];
    
    public function __construct($_id, $_effetti)
    {
        parent::__construct($_id);
        $this->effetti = $_effetti;
    }
}
