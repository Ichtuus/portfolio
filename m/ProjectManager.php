<?php

/**
 *Manager of project class
 */
class ProjectManager
{

    private $db;

    /***constructor of connexion*/
    public function __construct(PDO $connect)
    {
        $this->db=$connect;
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


    /***function who take one project*/
    public function oneProject(int $id){
        $list = $this->db->query("SELECT p.*,u.* FROM project p INNER JOIN util u ON p.utilidutil=u.idutil WHERE p.idproject=?");
        $request = $this->db->prepare($list);
        $request->bindValue(1,$id,PDO::PARAM_INT);
        $request->execute();
        if($request->rowCount()){
            return $request->fetch(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

}