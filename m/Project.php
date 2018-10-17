<?php

/**class projetc
 */
class Project
{

    private $idproject, $thename, $description, $thedate, $link, $utilIdutil;

    private $surname,$idutil,$theName;

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
     *getters
     */
    public function getIdproject()
    {
        return $this->idproject;
    }


    public function getThename()
    {
        return $this->thename;
    }



    public function getDescription()
    {
        return $this->description;
    }

    public function getThedate()
    {
        return $this->thedate;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getUtilIdutil()
    {
        return $this->utilIdutil;
    }

    /**
     * setters
     */
    public function setIdproject($idproject)
    {
        $this->idproject = (int) $idproject;
    }

    /**
     * @param mixed $thename
     */
    public function setThename($thename): void
    {
        $this->thename = $thename;
    }



    public function setDescription($description)
    {
        $this->description = html_entity_decode($description);
    }

    public function setThedate($thedate)
    {
        $this->thedate = $thedate;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function setUtilIdutil($utilIdutil)
    {
        $this->util_idutil = $utilIdutil;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getIdutil()
    {
        return $this->idutil;
    }

    /**
     * @param mixed $idutil
     */
    public function setIdutil($idutil): void
    {
        $this->idutil = $idutil;
    }





}