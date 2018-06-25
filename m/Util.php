<?php
/**
 * Created by PhpStorm.
 * User: nicolas.diarra
 * Date: 25-06-18
 * Time: 14:49
 */

class Util
{

    private $idutil,$surname,$theName,$password,$permission;


    /***Constructor*/
    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    /*** function of hydratation*/
    private function hydrate(Array $Datas){
        foreach ($Datas as $key => $value){
            $NameSetter = "set".ucfirst($key);
            if(method_exists($this,$NameSetter)){
                $this->$NameSetter($value);
            }else{
                echo "Le setter: $NameSetter n'existe pas<br>";
            }
        }
    }

    /**
     * getters
     */
    public function getIdutil()
    {
        return $this->idutil;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getTheName()
    {
        return $this->theName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPermission()
    {
        return $this->permission;
    }



    /**
     * setters
     */
    public function setIdutil($idutil): void
    {
        $this->idutil = $idutil;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function setTheName($theName): void
    {
        $this->theName = $theName;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function setPermission($permission): void
    {
        $this->permission = $permission;
    }




}