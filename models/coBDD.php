<?php 
// Informations de connexion à la base de données
$servername = "localhost"; // Nom du serveur de la base de données
$username = "root2"; // Nom d'utilisateur de la base de données
$password = "root2"; // Mot de passe de la base de données
$dbname = "lesmillesconduites"; // Nom de la base de données

// Création de la connexion PDO
try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // Crée une instance de la classe PDO pour se connecter à la base de données
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure le mode de gestion des erreurs pour afficher les exceptions
} catch (PDOException $e) {
    die("La connexion a échoué : " . $e->getMessage()); // Affiche un message d'erreur si la connexion à la base de données échoue
    echo "La connexion à la base de données est établie avec succès";
}

// Vérification de la connexion
if (!$connexion) {
    die("La connexion a échoué"); // Arrête l'exécution du script si la connexion à la base de données a échoué
}
?>