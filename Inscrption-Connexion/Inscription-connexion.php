<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = ""; // Remplacez par votre mot de passe MySQL
$dbname = "votre_base_de_donnees"; // Remplacez par le nom de votre base de données

$conn = new Inscription-connexion($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération et validation des données
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash sécurisé du mot de passe
$birthdate = $_POST['birthdate'];
$avatar = $_FILES['avatar']['name'];
$platform = $_POST['platform'];
$games = json_encode($_POST['games']);

// Déplacer l'image vers un dossier "uploads" (Assurez-vous que le dossier existe et que les permissions sont réglées)
move_uploaded_file($_FILES['avatar']['tmp_name'], "uploads/" . $avatar);

// Insertion des données dans la base de données
$sql = "INSERT INTO users (email, pseudo, password, birthdate, avatar, platform, games)
VALUES ('$email', '$pseudo', '$password', '$birthdate', '$avatar', '$platform', '$games')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
