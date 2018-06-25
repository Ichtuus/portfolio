<?php
$Project= new ProjectManager($db);
if(isset($_GET['p'])){
    switch ($_GET['p']){

        case "detailProject":
            require "v/detailProject";
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