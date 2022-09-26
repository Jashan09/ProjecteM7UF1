<?php

class Persona
{

    private $user;
    private $contrasenya;
    private $email;
    private $arrayBitllets;
    private $arrayViatgesRealitzats;
    private $esAdmin;

    /**
     * @param $user
     * @param $contrasenya
     * @param $email
     * @param $arrayBitllets
     * @param $esAdmin
     */
    public function __construct($user, $contrasenya, $email)
    {
        $this->user = $user;
        $this->contrasenya = $contrasenya;
        $this->email = $email;
        $this->arrayBitllets = array();
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getContrasenya()
    {
        return $this->contrasenya;
    }

    /**
     * @param mixed $contrasenya
     */
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getArrayBitllets()
    {
        return $this->arrayBitllets;
    }

    /**
     * @param array $arrayBitllets
     */
    public function setArrayBitllets($arrayBitllets)
    {
        $this->arrayBitllets = $arrayBitllets;
    }

    /**
     * @return mixed
     */
    public function getEsAdmin()
    {
        return $this->esAdmin;
    }

    /**
     * @param mixed $esAdmin
     */
    public function setEsAdmin($esAdmin)
    {
        $this->esAdmin = $esAdmin;
    }


    public function addBitllet($bitllet){
        $this->arrayBitllets[] = $bitllet;
    }



}