<!DOCTYPE html>
<html>
<head>
    <title>Nasif</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

<!-- Header -->
<header id="header">
    <div class="inner">
        <div class="content">
            <h1>Nicolas Diarra</h1>
            <h2>All of my work here<br/>
                good navigation
            </h2>
            <a href="#" class="button big alt"><span>Let's Go !</span></a>
        </div>
        <a href="#" class="button hidden"><span>Let's Go !</span></a>
    </div>
</header>
<div>
    <?php
        if(isset($_SESSION['permission'])){
            switch ($_SESSION['permission']) {
                case 1:
                    $info = "<p style='position: absolute;left:88%;'>You are administrator</p>";
                    break;

                case 2:
                    $info = "<p style='position: absolute;left:88%;'>You are anonymous";
                    break;
            }
            echo $info;
        }


    if(!isset($_SESSION['permission'])){
        ?>
        <div id="connexion">
            <input type="text" id="theName" placeholder="Login">
            <input type="password" id="password" placeholder="Password">
            <button onclick="connexion()">Send</button>
        </div>
        <?php
    }else{
        ?>
        <?php if($_SESSION['permission'] == 1){ ?> <a href="./?p=admin">Administration</a> | <?php } ?>
        <a href="v/logout.php">Logout</a>
        <?php
    }
    ?>

</div>