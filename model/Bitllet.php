<?php

class Bitllet
{

    private $idBitllet;
    private $origen;
    private $destinacio;
    private $caducitat;
    private $preuDelBitllet;
    private $bitlletAnadaTornada;
    private $propietariDelBitllet;

    /**
     * @param $idBitllet
     * @param $origen
     * @param $destinacio
     * @param $caducitat
     * @param $preuDelBitllet
     */
    public function __construct($idBitllet, $origen, $destinacio, $preuDelBitllet, $propietariDelBitllet, $bitlletAnadaTornada)
    {
        $this->idBitllet = $idBitllet;
        $this->origen = $origen;
        $this->destinacio = $destinacio;
        $this->preuDelBitllet = $preuDelBitllet;
        $this->propietariDelBitllet = $propietariDelBitllet;
        $this->bitlletAnadaTornada = $bitlletAnadaTornada;
    }

    /**
     * @return mixed
     */
    public function getIdBitllet()
    {
        return $this->idBitllet;
    }

    /**
     * @param mixed $idBitllet
     */
    public function setIdBitllet($idBitllet): void
    {
        $this->idBitllet = $idBitllet;
    }

    /**
     * @return mixed
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * @param mixed $origen
     */
    public function setOrigen($origen): void
    {
        $this->origen = $origen;
    }

    /**
     * @return mixed
     */
    public function getDestinacio()
    {
        return $this->destinacio;
    }

    /**
     * @param mixed $destinacio
     */
    public function setDestinacio($destinacio): void
    {
        $this->destinacio = $destinacio;
    }

    /**
     * @return mixed
     */
    public function getCaducitat()
    {
        return $this->caducitat;
    }

    /**
     * @param mixed $caducitat
     */
    public function setCaducitat($caducitat): void
    {
        $this->caducitat = $caducitat;
    }

    /**
     * @return mixed
     */
    public function getPreuDelBitllet()
    {
        return $this->preuDelBitllet;
    }

    /**
     * @param mixed $preuDelBitllet
     */
    public function setPreuDelBitllet($preuDelBitllet): void
    {
        $this->preuDelBitllet = $preuDelBitllet;
    }

    /**
     * @return mixed
     */
    public function getBitlletAnadaTornada()
    {
        return $this->bitlletAnadaTornada;
    }

    /**
     * @param mixed $bitlletAnadaTornada
     */
    public function setBitlletAnadaTornada($bitlletAnadaTornada): void
    {
        $this->bitlletAnadaTornada = $bitlletAnadaTornada;
    }

    /**
     * @return mixed
     */
    public function getPropietariDelBitllet()
    {
        return $this->propietariDelBitllet;
    }

    /**
     * @param mixed $propietariDelBitllet
     */
    public function setPropietariDelBitllet($propietariDelBitllet): void
    {
        $this->propietariDelBitllet = $propietariDelBitllet;
    }




}