<?php 

class AccueilController {
    public function accueil() {
        return require 'views/pages/accueil.view.php';
    }

    public function monture() {
        return require 'views/pages/monture.view.php';
    }
}
?>