<?php

class Bitllet
{

    private $idBitllet;
    private $origen;
    private $destinacio;
    private $caducitat;
    private $preuDelBitllet;
    private $bitlletAnadaTornada;

    /**
     * @param $idBitllet
     * @param $origen
     * @param $destinacio
     * @param $caducitat
     * @param $preuDelBitllet
     */
    public function __construct($idBitllet, $origen, $destinacio, $preuDelBitllet)
    {
        $this->idBitllet = $idBitllet;
        $this->origen = $origen;
        $this->destinacio = $destinacio;
        $this->preuDelBitllet = $preuDelBitllet;
    }




}