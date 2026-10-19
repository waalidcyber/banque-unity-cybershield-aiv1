<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si 'code' existe dans POST
    if (!isset($_POST["code"]) || empty($_POST["code"])) {
        $error = "Veuillez entrer le code de vérification";
    } elseif ($_POST["code"] != $_SESSION['verification_code']) {
        $error = "Code incorrect. Veuillez réessayer.";
    } else {
        // Code correct - connecter l'utilisateur
        $_SESSION['id'] = $_SESSION['user_temp']['id'];
        $_SESSION['username'] = $_SESSION['user_temp']['username'];
        $_SESSION['email'] = $_SESSION['user_temp']['email'];
        
        // Nettoyer les données temporaires
        unset($_SESSION['verification_code']);
        unset($_SESSION['user_temp']);
        
        // Régénérer l'ID de session pour plus de sécurité
        session_regenerate_id(true);
        
        header("Location: Dashboard.php");
        exit();
    }
    
    
    // 2. ACTION : RENVOYER LE CODE
    if (isset($_POST['renvoyer'])) {
        // Générer un nouveau code
        $new_code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $_SESSION['verification_code'] = $new_code;
        
        // Envoyer selon la méthode courante
        
            include "send_mailer.php";
            $to = $_SESSION['user_temp']['email'];
            $subject = "Nouveau code de vérification Shine";
            $body = "
                <h2>Nouveau code de vérification</h2>
                <p>Bonjour " . htmlspecialchars($_SESSION['user_temp']['username']) . ",</p>
                <p>Voici votre nouveau code de vérification :</p>
                <h1 style='color:#e91e63; font-size: 32px;'>$new_code</h1>
                <p>Ce code est valide pendant 10 minutes.</p>
                <hr>
                <p>Cordialement,<br>L'équipe Shine</p>
            ";
            
            if (send_email($to, $subject, $body)) {
                $success = "Un nouveau code a été envoyé à votre email.";
            } else {
                $error = "Erreur lors de l'envoi du code. Veuillez réessayer.";
            }
        
    
} 

// Configuration Twilio
 function send_sms_twilio($to, $message) {
    try {
        // Inclure Twilio
        require_once '/vendor/twilio/sdk/src/Twilio/autoload.php';
        
        // Vos identifiants Twilio (à mettre dans un fichier de config séparé)
        $sid = 'USf4f4f9e963c00a842ea734d575b1cb72';  // Votre Account SID
        $token = 'BBE3FXEKLGABQ72SY5X5LJRN';  // Votre Auth Token
        $twilio_number = '+2120621297319';  // Votre numéro Twilio français
        
        // Créer le client Twilio
        $client = new Twilio\Rest\Client($sid, $token);
        
        // Envoyer le SMS
        $message = $client->messages->create(
            $to,  // Numéro du destinataire
            [
                'from' => $twilio_number,  // Votre numéro Twilio
                'body' => $message  // Le message
            ]
        );
        
        // Retourner l'ID du message si succès
        return $message->sid ?: true;
        
    } catch (Exception $e) {
        // Journaliser l'erreur
        error_log("Erreur Twilio: " . $e->getMessage());
        return false;
    }
}
 $verification_code =$_SESSION['verification_code'];
 $message = "Votre code de vérification Shine : $verification_code\nCe code expire dans 10 minutes.";
// Fonction pour envoyer un code de vérification
function send_verification_code_sms($phone, $message ) {
    
    
    return send_sms_twilio($phone,$message);
header('location:sms.php');
} 
if (isset($_POST['autre_methode'])){
 
  }
   $phone = $_SESSION['user_temp']['phone'] ?? '';
            
            if ($phone) {
                if (send_verification_code_sms($phone, $message)) {
                    $success = "Code envoyé par SMS.";
                } else {
                    $error = "Erreur d'envoi SMS. Retour à l'email.";
                    $_SESSION['verification_method'] = 'email';
                }
            } else {
                $error = "Numéro de téléphone non disponible. Retour à l'email.";
            }
}
?>