<?php
$Project= new ProjectManager($db);
if(isset($_GET['p'])){
    switch ($_GET['p']){

        case "detailProject":
            $idProject=(int)$_GET["detailProject"];
            $recupProject=$Project->oneProject($idProject);
            if(!$recupProject){
                $listView="Project doesn't exist";
            }else{
                $listView=new Project($recupProject);
            }
            require "v/detailProject.php";
            break;
    }

}else{
    $recupProject=$Project->listProject();
    if($recupProject){
        foreach ($recupProject as $item){
            $listView[]=new Project($item);
        }
    }else{
        $listView="No project";
    }
   require "v/home.php";
}