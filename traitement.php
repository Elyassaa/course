<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']); // Sanitize input
    $email = htmlspecialchars($_POST['email']); // Sanitize input
    
    echo "<h2>Informations reçues :</h2>";
    echo "<p><strong>Nom:</strong> $nom</p>";
    echo "<p><strong>Email:</strong> $email</p>";
} else {
    echo "<h2>Aucune donnée reçue.</h2>";
}
?>
