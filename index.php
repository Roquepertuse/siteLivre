<?php 

if (!isset($_SESSION['idPlayer'])) {
    session_start();
}; 

//require "Controllers/Controller.controller.php";
//$Controller = new Controller();

function requireAdmin($file) { 
    if ($_SESSION['is_admin']) {
        require $file;
        return true;
    }
    session_destroy();
    header('Location: http://localhost/FairyMelodyRNCP/loginbis');
}

if(empty($_GET['page'])){
    //$Controller->accueil();
    require 'views/pages/accueil.view.php';
}else{
   switch($_GET['page']){
        case "accueil" : require 'views/pages/accueil.view.php';
        //case "accueil" : $Controller->accueil();
        break;
        case "test" : require 'views/pages/test.view.php';
        break;
        case "autres" : require 'views/pages/coursDeCode.view.php';
        break;
        //case "admin" : requireAdmin('./Crud/crud.index.php');
        //break;
   }
}