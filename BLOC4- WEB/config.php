<?php
// Informations de connexion
$host = "localhost";
$dbname = "adopteunchien";
$user = "root";
$pass = ""; // Laisse vide si tu es en local avec XAMPP ou WAMP

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // Active le mode d’erreur pour voir les problèmes SQL (facultatif mais utile)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "✅ Connexion réussie à la base de données.";
} catch (PDOException $e) {
    die("❌ Erreur : " . $e->getMessage());
}
?>