<?php

class movie
{
    public $nome;
    public $uscita;
    public $voto;
    public $lingua;

     public function writing()
     {
         return "$this->nome uscita: $this->uscita Voto : $this->voto Lingua : $this->lingua";
    }


    public function __construct($nome, $uscita, $voto, $lingua)
    {
        $this->nome = $nome;
        $this->uscita = $uscita;
        $this->voto = $voto;
        $this->lingua = $lingua;
    }

}