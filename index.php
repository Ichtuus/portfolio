<?php
/**
 *open session
 */

session_start();

/***call dependance */
require_once "config.php";

/***view header */
require "v/header.php";

/***db */
try{$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');}
catch (Exception $e){die('Erreur : ' . $e->getMessage());}


/***autoload */
spl_autoload_register(function ($nameClass) {
    require_once "m/$nameClass.php";
});



if(isset($_SESSION['permission'])){
    if($_SESSION['permission']==1){
        require_once 'c/adminController.php';
    }else{
        require_once 'c/userController.php';
    }
}else{

    require_once 'c/publicController.php';
}
/***view footer */
require "v/footer.php";
?>

<!-- Css -->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/ajax.js"></script>

