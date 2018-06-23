<?php

/**class projetc
 */
class Project
{

    private $idproject, $name, $description, $date, $link, $util_idutil;

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

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getUtilIdutil()
    {
        return $this->util_idutil;
    }

    /**
     * setters
     */
    public function setIdproject($idproject)
    {
        $this->idproject = (int) $idproject;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = html_entity_decode($description);
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function setUtilIdutil($util_idutil)
    {
        $this->util_idutil = $util_idutil;
    }



}