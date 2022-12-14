<?php

class Persona
{

    private $user;
    private $contrasenya;
    private $email;
    private $arrayBitllets;
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

    public function removeBitllet2($idBitllet){

        $comptador = 0;

        foreach ($this->arrayBitllets as $key => $unBitllet){
            if($unBitllet->getIdBitllet() == $idBitllet){
                unset($this->arrayBitllets[$key]);
                $comptador++;
            }else if($comptador>0){
                $this->arrayBitllets[$key-$comptador] = $unBitllet;
                unset($this->arrayBitllets[$key]);
            }
        }
    }

    public function findBitlletWithId($idBitllet){
        foreach ($this->arrayBitllets as $unBitllet){
            if($unBitllet->getIdBitllet() == $idBitllet) {
                return $unBitllet;
            }
        }
    }





}