<?php
// Configuration vulnérable - informations en clair
$host = 'localhost';
$dbname = 'cybershield_ai';
$username = 'root';
$password = '';

try {
    // Connexion sans options de sécurité
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Désactivation des erreurs PDO (mauvaise pratique)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    
} catch(PDOException $e) {
    // Affichage d'erreurs détaillées (vulnérable)
    die("Erreur de connexion: " . $e->getMessage());
}

// Pas de protection CSRF
// Pas de headers de sécurité
// Pas de configuration de session sécurisée
?>