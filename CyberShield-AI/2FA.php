<?php 
include '2FA_process.php' ;
include 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA - CyberShield AI</title>
    <style>
    /* Page 2FA CyberShield AI - Version corrigée */
    
    body {
        background-color: #0a0e17;
        color: #e0e0e0;
        min-height: 100vh;
        font-family: 'Segoe UI', system-ui, sans-serif;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    /* Section principale */
    .login-section {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        padding: 40px 0;
    }
    
    .login-container {
        background: rgba(16, 30, 50, 0.95);
        border-radius: 16px;
        padding: 40px;
        width: 100%;
        max-width: 450px;
        border: 1px solid rgba(64, 224, 208, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        text-align: center;
    }
    
    /* Titre */
    .login-title {
        font-size: 32px;
        margin-bottom: 30px;
        background: linear-gradient(to right, #40e0d0, #20b2aa);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: 700;
    }
    
    /* Champs de formulaire */
    .form-group {
        margin-bottom: 25px;
        text-align: left;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 10px;
        color: #b0b0b0;
        font-weight: 500;
    }
    
    .form-control {
        width: 100%;
        padding: 15px;
        background: rgba(10, 14, 23, 0.8);
        border: 1px solid rgba(64, 224, 208, 0.4);
        border-radius: 8px;
        color: #e0e0e0;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
        letter-spacing: 5px;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #40e0d0;
        box-shadow: 0 0 0 3px rgba(64, 224, 208, 0.1);
    }
    
    /* Bouton principal */
    .btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #40e0d0, #20b2aa);
        color: #0a0e17;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        margin-top: 10px;
        transition: transform 0.3s;
    }
    
    .btn:hover {
        transform: translateY(-2px);
    }
    
    /* Boutons secondaires */
    .login-links {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid rgba(64, 224, 208, 0.1);
    }
    
    .login-links button {
        background: none;
        border: none;
        color: #40e0d0;
        cursor: pointer;
        padding: 10px 15px;
        margin: 0 10px;
        font-size: 15px;
        transition: color 0.3s;
    }
    
    .login-links button:hover {
        color: #20b2aa;
    }
    
    /* Message d'erreur */
  
    
    /* Responsive */
    @media (max-width: 768px) {
        .login-container {
            padding: 30px 20px;
            margin: 0 20px;
        }
        
        .login-title {
            font-size: 28px;
        }
        
        .form-control {
            font-size: 16px;
            padding: 12px;
        }
    }
</style>
</head>
<body>
     <section class="login-section">
        <div class="container">
            <div class="login-container">
                <h2 class="login-title">2FA</h2>
                <form action="2FA.php" method="POST">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" id="code" name="code" class="form-control" >
                         <span style="color:red"><?php echo$code_error  ?? ""; ?></span>
                    </div>
                    <button  type="submit" class="btn">Vérifier</button>
                    
                    <div class="login-links">
                       <button type="submit" name="renvoyer" 
                            style="display: inline-block; cursor: pointer; background: none;border: none; color: #e91e63; text-decoration: underline;
                            text-underline-offset: 3px;" class="btn">renvoyer</button>
                        <button type="submit" name="autre_methode"  
                            style="display: inline-block;cursor: pointer; background: none;border: none; color: #e91e63; text-decoration: underline;
                            text-underline-offset: 3px;" class="btn">autre méthode</button>
                    </div>
                </form>
            
            </div>
        </div>
    </section>

  
<?php include 'includes/footer.php'; ?>
</body>
</html>