<?php
$Project= new ProjectManager($db);
if(isset($_GET['p'])){
    switch ($_GET['p']){


        case "admin":
            $recupProject=$Project->listProject();
            if($recupProject){
                foreach ($recupProject as $item){
                    $listView[]=new Project($item);
                }
            }else{
                $listView="No project";
            }
            require "v/admin.php";
            break;

        case "detailProject":
            require "v/detailProject.php";
            break;

        case "addProject":
            require "v/createProjectAdmin.php";
            break;

        case "updateProject":
            require "v/updateProjectAdmin.php";
            break;
    }

}else{

    require "v/home.php";
}