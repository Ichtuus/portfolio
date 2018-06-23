<?php

/**
 *Manager of project class
 */
class ProjectManager
{

    private $db;

    /***constructor of connexion*/
    public function __construct(PDO $connexion)
    {
        $this->db=$connexion;
    }


    /***function who list project*/
    public function listProject(){
        $list = $this->db->query("SELECT * FROM project");
        if($list->rowCount()){
            return $list->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

}