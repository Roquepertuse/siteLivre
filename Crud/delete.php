<?php 
require 'CRUD.php';

$crud = new CRUD();

// vérifie si l'id existe
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $crud->delete($id);

    if (isset($_SESSION['is_admin'])) {
        if ($_SESSION['is_admin'] == 1) {
            header('Location: crud.index.php');
            exit();
        } else {
            header('Location:http://localhost/FairyMelodyRNCP/activite');
            exit();
        }
    }

    if ($evenements === false){
        die('Produit non trouvé');
    }
}else {
    die('Id du produit manquant');
}