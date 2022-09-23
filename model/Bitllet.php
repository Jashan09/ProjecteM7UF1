<?php

class Bitllet
{

    private $origen;
    private $destinacio;
    private $caducitat;
    private $preuDelBitllet;
    private $bitlletAnadaTornada;

    /**
     * @param $origen
     * @param $destinacio
     * @param $caducitat
     * @param $preuDelBitllet
     */
    public function __construct($origen, $destinacio, $preuDelBitllet)
    {
        $this->origen = $origen;
        $this->destinacio = $destinacio;
        $this->preuDelBitllet = $preuDelBitllet;
    }


}