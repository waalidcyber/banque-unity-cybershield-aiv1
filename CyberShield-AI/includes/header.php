
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'CyberShield AI'; ?></title>

    <style>
    /* Header CyberShield AI */
    header {
        background: rgba(10, 14, 23, 0.95);
        backdrop-filter: blur(10px);
        padding: 20px 0;
        border-bottom: 1px solid rgba(64, 224, 208, 0.2);
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }
    
    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .logo {
        font-size: 26px;
        font-weight: 700;
        color: #40e0d0;
        text-decoration: none;
        background: linear-gradient(to right, #40e0d0, #20b2aa);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        position: relative;
        padding-right: 15px;
    }
    
    .logo::after {
        content: '';
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 30px;
        background: linear-gradient(to bottom, #40e0d0, #20b2aa);
        border-radius: 2px;
    }
    
    nav ul {
        display: flex;
        list-style: none;
        gap: 25px;
        margin: 0;
        padding: 0;
    }
    
    nav a {
        color: #b0b0b0;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        padding: 8px 0;
        position: relative;
        transition: all 0.3s ease;
    }
    
    nav a:hover {
        color: #40e0d0;
    }
    
    nav a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(to right, #40e0d0, #20b2aa);
        transition: width 0.3s ease;
        border-radius: 2px;
    }
    
    nav a:hover::after {
        width: 100%;
    }
    
    /* Style pour le lien admin */
    nav a[href*="admin"] {
        color: #ff6b6b;
        font-weight: 600;
    }
    
    nav a[href*="admin"]::after {
        background: linear-gradient(to right, #ff6b6b, #ff4757);
    }
    
    nav a[href*="admin"]:hover {
        color: #ff4757;
    }
    
    /* Style pour déconnexion */
    nav a[href="logout.php"] {
        color: #ffa726;
    }
    
    nav a[href="logout.php"]::after {
        background: linear-gradient(to right, #ffa726, #ff9800);
    }
    
    nav a[href="logout.php"]:hover {
        color: #ff9800;
    }
    
    /* User info */
    .user-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .welcome-msg {
        color: #40e0d0;
        font-weight: 500;
        font-size: 15px;
        padding: 8px 16px;
        background: rgba(64, 224, 208, 0.1);
        border-radius: 8px;
        border: 1px solid rgba(64, 224, 208, 0.2);
    }
    
    /* Badge admin */
    .admin-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        background: rgba(255, 107, 107, 0.1);
        color: #ff6b6b;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        border: 1px solid rgba(255, 107, 107, 0.3);
    }
    
    /* Cyber effects dans le header */
    .header-cyber-line {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(64, 224, 208, 0.3), 
            rgba(64, 224, 208, 0.6), 
            rgba(64, 224, 208, 0.3), 
            transparent
        );
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }
        
        nav ul {
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .logo::after {
            display: none;
        }
        
        .user-info {
            justify-content: center;
        }
        
        .welcome-msg {
            font-size: 14px;
            padding: 6px 12px;
        }
    }
    
    @media (max-width: 480px) {
        nav ul {
            gap: 10px;
        }
        
        nav a {
            font-size: 14px;
        }
        
        .logo {
            font-size: 22px;
        }
    }
</style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="index.php" class="logo">CyberShield AI</a>
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <?php if(isset($_SESSION['id'])): ?>
                                <li><a href="logout.php">Déconnexion</a></li>
                        <?php else: ?>
                            <li><a href="login.php">Connexion</a></li>
                            <li><a href="sign_in.php">Inscription</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php if(isset($_SESSION['username'])): ?>
                    <div class="user-info">
                        <span class="welcome-msg">Bonjour, <?php echo $_SESSION['username']; ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>