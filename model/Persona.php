<?php

class Persona
{

    private $user;
    private $contrasenya;
    private $email;
    private $quantitatDeBillets;
    private $esAdmin;

    /**
     * @param $user
     * @param $contrasenya
     * @param $email
     * @param $quantitatDeBillets
     * @param $esAdmin
     */
    public function __construct($user, $contrasenya, $email)
    {
        $this->user = $user;
        $this->contrasenya = $contrasenya;
        $this->email = $email;
        $this->quantitatDeBillets = array();
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
    public function getQuantitatDeBillets()
    {
        return $this->quantitatDeBillets;
    }

    /**
     * @param array $quantitatDeBillets
     */
    public function setQuantitatDeBillets($quantitatDeBillets)
    {
        $this->quantitatDeBillets = $quantitatDeBillets;
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




}