<?php 
include 'login_process.php' ;
include 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - CyberShield AI</title>
    <style>
    /* Styles pour la page de connexion - CyberShield AI Theme */
    
    body {
        background-color: #0a0e17;
        color: #e0e0e0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        font-family: 'Segoe UI', system-ui, sans-serif;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    /* Login Section */
    .login-section {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    
    .login-section::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: 
            linear-gradient(rgba(64, 224, 208, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(64, 224, 208, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
        z-index: 0;
    }
    
    .login-container {
        background: rgba(16, 30, 50, 0.8);
        border-radius: 16px;
        padding: 50px;
        width: 100%;
        max-width: 480px;
        border: 1px solid rgba(64, 224, 208, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        position: relative;
        z-index: 1;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }
    
    .login-container:hover {
        border-color: rgba(64, 224, 208, 0.4);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5), 0 0 60px rgba(64, 224, 208, 0.1);
    }
    
    .login-title {
        font-size: 36px;
        margin-bottom: 30px;
        text-align: center;
        background: linear-gradient(to right, #40e0d0, #20b2aa);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: 700;
        position: relative;
    }
    
    .login-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(to right, #40e0d0, #20b2aa);
        border-radius: 2px;
    }
    
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #b0b0b0;
        font-weight: 500;
        font-size: 15px;
    }
    
    .form-control {
        width: 100%;
        padding: 14px 18px;
        background: rgba(10, 14, 23, 0.8);
        border: 1px solid rgba(64, 224, 208, 0.3);
        border-radius: 8px;
        color: #e0e0e0;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #40e0d0;
        box-shadow: 0 0 0 3px rgba(64, 224, 208, 0.1);
    }
    
    .form-control:hover {
        border-color: rgba(64, 224, 208, 0.5);
    }
    
    .form-control::placeholder {
        color: #666;
    }
    
    .btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #40e0d0, #20b2aa);
        color: #0a0e17;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(64, 224, 208, 0.3);
    }
    
    .btn:active {
        transform: translateY(0);
    }
    
    .login-links {
        text-align: center;
        margin-top: 30px;
        padding-top: 25px;
        border-top: 1px solid rgba(64, 224, 208, 0.1);
    }
    
    .login-links p {
        color: #888;
        font-size: 15px;
    }
    
    .login-links a {
        color: #40e0d0;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .login-links a::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 1px;
        background: #40e0d0;
        transition: width 0.3s ease;
    }
    
    .login-links a:hover {
        color: #20b2aa;
    }
    
    .login-links a:hover::after {
        width: 100%;
    }
    
    
    
    @keyframes errorPulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }
    
    /* Cyber elements decoration */
    .cyber-decoration {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
    }
    
    .cyber-node-small {
        position: absolute;
        width: 6px;
        height: 6px;
        background-color: #40e0d0;
        border-radius: 50%;
        box-shadow: 0 0 10px #40e0d0;
        opacity: 0.5;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .login-container {
            padding: 40px 30px;
            margin: 0 20px;
        }
        
        .login-title {
            font-size: 30px;
        }
        
        .login-section {
            padding: 40px 0;
        }
    }
    
    @media (max-width: 480px) {
        .login-container {
            padding: 30px 20px;
        }
        
        .login-title {
            font-size: 26px;
        }
        
        .form-control {
            padding: 12px 16px;
        }
        
        .btn {
            padding: 14px;
        }
    }
</style>

<script>
// Ajout d'éléments cyber décoratifs
document.addEventListener('DOMContentLoaded', function() {
    const loginSection = document.querySelector('.login-section');
    
    for(let i = 0; i < 8; i++) {
        const node = document.createElement('div');
        node.classList.add('cyber-node-small');
        
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        
        node.style.left = `${posX}%`;
        node.style.top = `${posY}%`;
        
        // Animation de pulsation
        (function animateNode(el) {
            let opacity = 0.3;
            let increasing = true;
            
            function animate() {
                if (increasing) {
                    opacity += 0.01;
                    if (opacity >= 0.7) increasing = false;
                } else {
                    opacity -= 0.01;
                    if (opacity <= 0.3) increasing = true;
                }
                
                el.style.opacity = opacity;
                requestAnimationFrame(animate);
            }
            
            setTimeout(() => {
                animate();
            }, Math.random() * 2000);
        })(node);
        
        loginSection.appendChild(node);
    }
});
</script>
</head>
<body>
     

    <section class="login-section">
        <div class="container">
            <div class="login-container">
                <h2 class="login-title">Connexion</h2>
                <form action="login_process.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" >
                         <span style="color:red"><?php echo$email_error  ?? ""; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control" >
                         <span style="color:red"><?php echo$password_error  ?? ""; ?></span>
                    </div>
                    <button type="submit" class="btn">Se connecter</button>
                </form>
                
                <div class="login-links">
                    <p>Pas encore de compte? <a href="register.php">Inscrivez-vous</a></p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>