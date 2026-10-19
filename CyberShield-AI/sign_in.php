<?php 
include 'sign_in_process.php' ;
include 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <title>CyberShield AI</title>
   <style>
/* ===== BASE STYLES ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', 'Inter', -apple-system, sans-serif;
}

body {
    background: linear-gradient(135deg, #0a1422 0%, #0d1b2d 50%, #15263d 100%);
    color: #e6f0ff;
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
}

/* Effet de fond cyber */
body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    background: 
        radial-gradient(circle at 20% 30%, rgba(0, 114, 255, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(0, 198, 255, 0.06) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(0, 242, 254, 0.04) 0%, transparent 50%);
    z-index: -1;
}

/* ===== HEADER NAVIGATION ===== */
.page-header {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1.5rem 2rem;
}

.header-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid rgba(64, 156, 255, 0.2);
}

.site-title {
    font-size: 2.2rem;
    font-weight: 700;
    background: linear-gradient(90deg, #00c6ff, #0072ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: 0.5px;
}

.site-title::before {
    content: "CyberShield AI | ";
    color: #00c6ff;
}

.nav-menu {
    display: flex;
    gap: 2rem;
    list-style: none;
}

.nav-link {
    color: #c3d7ff;
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.nav-link:hover {
    color: #fff;
    background: rgba(64, 156, 255, 0.1);
}

.nav-link.active {
    color: #3d8cff;
    background: rgba(64, 156, 255, 0.15);
    font-weight: 600;
}

/* ===== PAGE TITLE SECTION ===== */
.page-title-section {
    text-align: center;
    margin-bottom: 3rem;
    padding: 0 1rem;
}

.page-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 0.5rem;
    letter-spacing: -0.5px;
}

.page-title::after {
    content: " | Inscription";
    color: #00c6ff;
}

.page-subtitle {
    font-size: 1.2rem;
    color: #a0c3ff;
    font-weight: 400;
}

/* ===== SEARCH BAR ===== */
.search-section {
    max-width: 600px;
    margin: 0 auto 4rem;
    padding: 0 1rem;
}

.search-label {
    display: block;
    text-align: center;
    color: #a0c3ff;
    font-size: 0.95rem;
    font-weight: 500;
    margin-bottom: 0.8rem;
    letter-spacing: 0.5px;
}

.search-input-wrapper {
    position: relative;
    width: 100%;
}

.search-input {
    width: 100%;
    padding: 1rem 1.5rem;
    padding-left: 3rem;
    background: rgba(10, 25, 47, 0.7);
    border: 1px solid rgba(64, 156, 255, 0.25);
    border-radius: 14px;
    color: #e6f0ff;
    font-size: 1rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.search-input:focus {
    outline: none;
    border-color: #3d8cff;
    box-shadow: 0 0 0 3px rgba(61, 140, 255, 0.2);
    background: rgba(15, 35, 65, 0.8);
}

.search-input::placeholder {
    color: #6a8bb8;
    font-style: italic;
}

.search-icon {
    position: absolute;
    left: 1.2rem;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%236a8bb8'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3C/svg%3E") no-repeat center;
    background-size: contain;
}

/* ===== SEPARATOR ===== */
.separator {
    height: 1px;
    background: linear-gradient(90deg, 
        transparent 0%, 
        rgba(64, 156, 255, 0.3) 20%, 
        rgba(64, 156, 255, 0.6) 50%, 
        rgba(64, 156, 255, 0.3) 80%, 
        transparent 100%);
    margin: 3rem auto;
    max-width: 800px;
}

/* ===== REGISTER SECTION ===== */
.register-section {
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
}

.register-container {
    background: linear-gradient(145deg, rgba(15, 26, 42, 0.95), rgba(21, 35, 53, 0.95));
    padding: 2.8rem;
    border-radius: 20px;
    box-shadow: 
        0 15px 35px rgba(0, 15, 40, 0.7),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(64, 156, 255, 0.15);
    backdrop-filter: blur(15px);
    position: relative;
    overflow: hidden;
    margin-top: 2rem;
}

.register-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #00c6ff, #0072ff, #00f2fe);
    z-index: 1;
}

.register-title {
    text-align: center;
    color: #fff;
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 2.2rem;
    letter-spacing: -0.5px;
    background: linear-gradient(90deg, #fff, #a0c3ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* ===== FORM STYLES ===== */
.form-group {
    margin-bottom: 1.8rem;
    position: relative;
}

.form-group label {
    display: block;
    color: #c3d7ff;
    font-size: 0.95rem;
    font-weight: 500;
    margin-bottom: 0.7rem;
    letter-spacing: 0.3px;
}

.form-control {
    width: 100%;
    padding: 1rem 1.2rem;
    background: rgba(10, 25, 47, 0.6);
    border: 1px solid rgba(64, 156, 255, 0.2);
    border-radius: 12px;
    color: #e6f0ff;
    font-size: 1rem;
    transition: all 0.25s ease;
    backdrop-filter: blur(5px);
}

.form-control:focus {
    outline: none;
    border-color: #3d8cff;
    box-shadow: 0 0 0 3px rgba(61, 140, 255, 0.15);
    background: rgba(15, 35, 65, 0.7);
}

.form-control::placeholder {
    color: #6a8bb8;
    opacity: 0.7;
}

/* ===== ERROR MESSAGES ===== */
.form-group span[style*="color:red"] {
    display: block;
    color: #ff6b6b !important;
    font-size: 0.85rem;
    margin-top: 0.5rem;
    font-weight: 500;
    padding-left: 0.3rem;
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ===== BUTTON ===== */
.btn {
    width: 100%;
    padding: 1.1rem;
    background: linear-gradient(135deg, #0072ff, #00c6ff);
    color: white;
    border: none;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 1.2rem;
    box-shadow: 0 8px 20px rgba(0, 114, 255, 0.3);
    position: relative;
    overflow: hidden;
}

.btn:hover {
    background: linear-gradient(135deg, #0066e8, #00b8f0);
    box-shadow: 0 10px 25px rgba(0, 114, 255, 0.4);
    transform: translateY(-3px);
}

.btn:active {
    transform: translateY(-1px);
}

.btn::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: 0.5s;
}

.btn:hover::after {
    left: 100%;
}

/* ===== REGISTER LINKS ===== */
.register-links {
    text-align: center;
    margin-top: 2.2rem;
    padding-top: 1.8rem;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    color: #a0c3ff;
    font-size: 0.95rem;
}

.register-links a {
    color: #3d8cff;
    text-decoration: none;
    font-weight: 600;
    margin-left: 5px;
    transition: all 0.2s ease;
    position: relative;
}

.register-links a:hover {
    color: #00c6ff;
}

.register-links a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 1px;
    background: linear-gradient(90deg, #3d8cff, #00c6ff);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.register-links a:hover::after {
    transform: scaleX(1);
}

/* ===== MAIN CONTENT WRAPPER ===== */
.main-content {
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .page-header {
        padding: 1rem;
    }
    
    .header-top {
        flex-direction: column;
        gap: 1.5rem;
        text-align: center;
    }
    
    .nav-menu {
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .page-title {
        font-size: 2rem;
    }
    
    .register-container {
        padding: 2rem;
        margin: 0 1rem;
    }
    
    .register-title {
        font-size: 1.9rem;
    }
    
    .search-section {
        margin-bottom: 3rem;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 1.8rem;
    }
    
    .register-container {
        padding: 1.8rem;
    }
    
    .register-title {
        font-size: 1.7rem;
    }
    
    .form-control {
        padding: 0.9rem 1rem;
    }
    
    .btn {
        padding: 1rem;
        font-size: 1rem;
    }
    
    .nav-menu {
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }
}
</style>
</head>
<body>


    <section class="register-section">
        <div class="container">
            <div class="register-container">
                <h2 class="register-title">Inscription</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nom_proprietaire">Nom du propriètaire</label>
                        <input type="text" id="nom_proprietaire" name="nom_proprietaire" class="form-control">
                        <span style="color:red"><?php echo$nom_proprietaire_error ?? "" ; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" >
                        <span style="color:red"><?php echo$email_error ?? "" ; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control" >
                        <span style="color:red"><?php echo$password_error ?? "" ; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="repassword">Confirmer le mot de passe</label>
                        <input type="password" id="repassword" name="repassword" class="form-control" >
                        <span style="color:red"><?php echo$repassword_error ?? "" ; ?></span>
                    </div>
                   <div class="form-group">
                        <label for="phone">Numéro de Téléphone</label>
                        <input type="text" id="phone" name="phone" class="form-control" >
                        <span style="color:red"><?php echo$phone_error ?? "" ; ?></span>
                    </div>
                    <button type="submit" class="btn">S'inscrire</button>
                </form>
                <div class="register-links">
                    <p>Déjà un compte? <a href="login.php">Connectez-vous</a></p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>