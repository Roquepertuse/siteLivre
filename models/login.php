<?php 

require "models/coBDD.php";

//if (isset($_POST['submit'])) { // Vérifie si le formulaire a été soumis

    if(!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
       
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"]; // Récupère la valeur du champ email
    $password = $_POST["password"]; // Récupère la valeur du champ password

    $sql = "SELECT * FROM users WHERE lastname = :lastname AND firstname = :firstname AND email = :email"; // Requête SQL pour récupérer les données utilisateur
    $stmt = $connexion->prepare($sql); // Prépare la requête SQL pour exécution
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':email', $email); // Lie la valeur du champ email au paramètre :email de la requête

    $stmt->execute(); // Exécute la requête préparée

    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupère la première ligne de résultat de la requête sous forme de tableau associatif

    if (!empty($user) && password_verify($password, $user['password'])) { // Vérifie si des données utilisateur ont été trouvées
        session_start(); // Démarre une session PHP
        $_SESSION['connecter'] = $user['lastname']; // Stocke la valeur du champ email dans la variable de session 'connecter'
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['is_admin'] = $user['is_admin'];
        echo 'Connexion réussie' . '<br>'; // Affiche un message de succès

        // Redirection
        header('Location: accueil'); // Redirige l'utilisateur vers une autre page
        exit(); // Arrête l'exécution du script
    } else {
        $error='<p class="text-danger text-center">La connexion a échoué</p>';
        header('Location: login');
    }
}