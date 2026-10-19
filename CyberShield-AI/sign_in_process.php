<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location: Dashboard.php');
    exit();
}


$nom_proprietaire_error="";
$email_error="";
$password_error="";
$repassword_error="";
$phone_error="";

       require_once "includes/config.php";   

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (strlen(trim($_POST["nom_proprietaire"])) <2   #-----Vous devez toujours valider à partir de cette source pour être sûr de travailler avec les vraies données ------$_post["firstname"]-----------
       || !preg_match("/^[a-zA-ZÀ-ÿ0-9\s\-]+$/", $_POST["nom_proprietaire"]) 
       || empty($_POST["nom_proprietaire"])) {
        $nom_proprietaire_error = "Le format de votre username n'est pas valid ";
    }
     
    
    if (empty(trim($_POST["email"]))) {
        $email_error = "L'email est obligatoire !";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Format email invalide !";
    }else {$count=$pdo->prepare("SELECT COUNT(*) FROM users 
                                    WHERE email= :email ") ; 
             $count->execute([':email' => $_POST["email"]]);
             if ($count->fetchColumn() > 0)  {
        $email_error=" cet email est déjà utilisée essayer avec un autre ";
            }
            } 
    
    if (empty(trim($_POST["password"]))) {
        $password_error = "Le mot de passe est obligatoire !";
    } elseif (strlen($_POST["password"]) < 8 || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/", $_POST["password"])) {
        $password_error = "Le mot de passe doit contenir à la fois des majiscules, niniscule, chiffres, caractères spéciaux !";
    }
    
    if (empty(trim($_POST["repassword"]))) {
        $repassword_error = "Veuillez confirmer le mot de passe !";
    } elseif ($_POST["password"] !== $_POST["repassword"]) {
        $repassword_error = "Les mots de passe ne correspondent pas !";
    }

    
    if (strlen(trim($_POST["phone"])) !==10  
       || empty($_POST["phone"])
       || !ctype_digit($_POST["phone"]) //or preg_match('/^[0-9]+$/', $code_postal)
       ) {
        $phone_error = "Ce numéro de téléphone n'est pas valid";
    }



if (empty($nom_proprietaire_error)  && empty($email_error) && 
    empty($password_error) && empty($repassword_error) 
    && empty($phone_error))
    { 

        $nom_proprietaire = htmlspecialchars($_POST['nom_proprietaire']);
        $email = htmlspecialchars($_POST['email']);
        $password=password_hash($_POST["password"],PASSWORD_DEFAULT);  
        $phone=htmlspecialchars($_POST['phone']);

        
        $sqlstate=$pdo->prepare(query:'INSERT INTO users VALUES(null,?,?,?,?)');
        $sqlstate->execute([$nom_proprietaire,$email,$password,$phone]);

        header('location:login.php');
        exit(); // ← OBLIGATOIRE après header()
    }
}
?>