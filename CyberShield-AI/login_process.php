<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location: Dashboard.php");
    exit();
}
include "send_mailer.php";
require_once "includes/config.php";
$email_error="";
$password_error="";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         
         //  Vérification CSRF 
    if (empty(trim($_POST["email"]))) {
        $email_error = "L'email est obligatoire !";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Format email invalide !";
    }
     if (empty(trim($_POST["password"]))) {
        $password_error = "Le mot de passe est obligatoire !";
    } elseif (strlen($_POST["password"]) < 8) {
        $password_error = "Le mot de passe doit contenir au moins 8 caractères !";
    }
    
    
    
    $count=$pdo->prepare("SELECT COUNT(*) FROM users 
            WHERE email= :email ") ; 
            $count->execute([':email' => $_POST["email"]]);
            $user_count=$count->fetchColumn();
             if ($user_count== 0)  {
            $email_error=" cet email ne correspond à aucun utilisateur  ";
            }else 
            {$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
             $stmt->execute([':email' => $_POST["email"]]);
             $user=$stmt->fetch() ;  #Retourne son mot de passe hashé (stocké en base)
             #$user : Vérifie si un utilisateur avec cet email existe
            if(!$user  || !password_verify($_POST["password"], $user["password"])) {  #password_verify() : Compare le mot de passe saisi avec le hash stocké
               $password_error=" ce mot de passe est incorrect  ";
            }
    }

// si on a pas acceder au bloc else le $user sera pas défini 
if ( empty($email_error) && empty($password_error) ){
      // GÉNÉRER UN CODE DE VÉRIFICATION
        $verification_code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        
        // STOCKER EN SESSION
        $_SESSION['verification_code'] = $verification_code;
        $_SESSION['user_temp'] = $user;  // Stocker temporairement l'utilisateur
        
        // PRÉPARER L'EMAIL
        $to = $user['email'];
        $subject = "Votre code de vérification CyberShield AI";
        $body = "
            <h2>Vérification en deux étapes</h2>
            <p>Bonjour " . htmlspecialchars($user['nom_proprietaire']) . ",</p>
            <p>Votre code de vérification pour vous connecter à Shine est :</p>
            <h1 style='color: #1ed1e9; font-size: 32px;'>$verification_code</h1>
            <p>Ce code est valide pendant 10 minutes.</p>
            <p>Si vous n'avez pas demandé cette connexion, veuillez ignorer cet email.</p>
            <hr>
            <p>Cordialement,<br>L'équipe Shine</p>
        ";
        
        //  ENVOYER L'EMAIL
        if (send_email($to, $subject, $body)) {
            // Rediriger vers la page de saisie du code
            header("Location: 2FA.php");
            exit();
        } else {
            $email_error = "Erreur d'envoi du code. Veuillez réessayer.";
        }
    
    // Session vulnérable (pas de régénération d'ID)
    $_SESSION['id'] = $user['id'];
    $_SESSION['nom_proprietaire'] = $user['nom_proprietaire'];
    $_SESSION['email'] = $user['email'];
   
    
    // Redirection vulnérable (pas de validation)
    //header("Location: index.php");
    //exit();
} else {
    echo "Identifiants incorrects. <a href='login.php'>Réessayer</a>";
}
    
}
?>