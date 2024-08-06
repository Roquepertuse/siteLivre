<?php 

require "models/coBDD.php";

// Vérification de la soumission du formulaire
//if (isset($_POST['submit'])) {

    if(!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $lastname = $_POST['lastname']; // Récupération du nom de famille depuis le formulaire
    $firstname = $_POST['firstname']; // Récupération du prénom depuis le formulaire
    $email = $_POST['email']; // Récupération de l'e-mail depuis le formulaire
    $password = $_POST['password']; // Récupération du mot de passe depuis le formulaire
    
    // Hashage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Requête d'insertion
    $query = "INSERT INTO users (lastname, firstname, email, password) VALUES (:lastname, :firstname, :email, :password)";
    $statement = $connexion->prepare($query);
 // Liaison des valeurs
    $statement->bindParam(':lastname', $lastname); // Liaison du nom de famille
    $statement->bindParam(':firstname', $firstname); // Liaison du prénom
    $statement->bindParam(':email', $email); // Liaison de l'e-mail
    $statement->bindParam(':password', $hashedPassword); // Liaison du mot de passe haché

// Exécution de la requête
if ($statement->execute()) {

    $email = $_POST['email']; // Récupérer l'e-mail de l'utilisateur inséré
    echo "Inscription réussie."; // Affichage d'un message de réussite
    $_SESSION['email'] = $email; // Stocker l'e-mail de l'utilisateur dans la session
    header('Location: accueil'); // Redirection vers la page de connexion
} else {
    echo "Erreur lors de l'inscription."; // Affichage d'un message d'erreur
}
}

// Fin de la mise en mémoire tampon et assignation du contenu
$content = ob_get_clean();

$title = "Inscription";

?>