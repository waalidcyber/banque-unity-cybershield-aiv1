<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberShield AI | Cybersécurité Intelligente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        } 
        
        body {
            background-color: #0a0e17;
            color: #e0e0e0;
            overflow-x: hidden;
            line-height: 1.2;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            padding: 20px 0;
            border-bottom: 1px solid rgba(64, 224, 208, 0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 24px;
            font-weight: 700;
            color: #40e0d0;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #40e0d0, #20b2aa);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        nav a {
            color: #b0b0b0;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: #40e0d0;
        }
        
        .cta-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #40e0d0, #20b2aa);
            color: #0a0e17;
            border: none;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(64, 224, 208, 0.3);
        }
        
        .btn-outline {
            background: transparent;
            color: #40e0d0;
            border: 2px solid #40e0d0;
        }
        
        .btn-outline:hover {
            background: rgba(64, 224, 208, 0.1);
        }
        
        /* Hero Section */
        .hero {
            padding: 80px 0 60px;
            display: flex;
            align-items: center;
            min-height: calc(100vh - 100px);
        }
        
        .hero-content {
            flex: 1;
            padding-right: 40px;
        }
        
        .hero-image {
            flex: 1;
            position: relative;
        }
        
        .hero-badge {
            display: inline-block;
            background: rgba(64, 224, 208, 0.1);
            color: #40e0d0;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        h1 {
            font-size: 48px;
            line-height: 1.2;
            margin-bottom: 10px;
            background: linear-gradient(to right, #40e0d0, #20b2aa);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .hero-subtitle {
            font-size: 20px;
            color: #b0b0b0;
            margin-bottom: 20px;
            max-width: 500px;
        }
        
        .cyber-visual {
            position: relative;
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, rgba(16, 30, 50, 0.8), rgba(10, 14, 23, 0.9));
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(64, 224, 208, 0.2);
        }
        
        .cyber-grid {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(64, 224, 208, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(64, 224, 208, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
        }
        
        .cyber-node {
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #40e0d0;
            border-radius: 50%;
            box-shadow: 0 0 15px #40e0d0;
        }
        
        .cyber-connection {
            position: absolute;
            height: 2px;
            background-color: rgba(64, 224, 208, 0.6);
            transform-origin: left center;
        }
        
        .cyber-shield {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 180px;
            height: 210px;
            background: rgba(64, 224, 208, 0.1);
            border-radius: 50% 50% 45% 45%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(64, 224, 208, 0.3);
            box-shadow: 0 0 40px rgba(64, 224, 208, 0.2);
        }
        
        .shield-icon {
            font-size: 80px;
            color: rgba(64, 224, 208, 0.7);
        }
        
        /* Stats Section */
        .stats {
            display: flex;
            justify-content: space-between;
            margin-top: 60px;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .stat-item {
            text-align: center;
            flex: 1;
            min-width: 200px;
        }
        
        .stat-number {
            font-size: 42px;
            font-weight: 700;
            color: #40e0d0;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 16px;
            color: #b0b0b0;
        }
        
        /* Footer */
        footer {
            padding: 40px 0;
            margin-top: 60px;
            border-top: 1px solid rgba(64, 224, 208, 0.1);
            text-align: center;
            color: #888;
        }
        
        .footer-logos {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .footer-logo {
            font-size: 20px;
            font-weight: 700;
            color: #40e0d0;
            opacity: 0.8;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-content {
                padding-right: 0;
                margin-bottom: 50px;
            }
            
            h1 {
                font-size: 40px;
            }
            
            .cyber-visual {
                height: 350px;
            }
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
            
            nav ul {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            h1 {
                font-size: 34px;
            }
            
            .hero-subtitle {
                font-size: 18px;
            }
            
            .cyber-visual {
                height: 300px;
            }
            
            .cyber-shield {
                width: 140px;
                height: 160px;
            }
            
            .shield-icon {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <span>CyberShield AI</span>
                </div>
               
                
                <div class="cta-buttons">
                    <a href="login.php" class="btn btn-outline">Connexion</a>
                    <a href="sign_in.php" class="btn btn-primary">Inscription</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    
                    <h1>Votre filet de sécurité numérique, sur pilote automatique.</h1>
                    <p class="hero-subtitle">Cybersécurité intelligente et résiliente, sans le bruit. Une protection dynamique pour des menaces en constante évolution.</p>
                  
                </div>
                
                <div class="hero-image">
                    <div class="cyber-visual" id="cyberVisual">
                        <!-- Les éléments cybersécurité seront générés par JavaScript -->
                        <div class="cyber-grid"></div>
                        <div class="cyber-shield">
                            <i class="fas fa-shield-alt shield-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="container">
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number">1.2M+</div>
                    <div class="stat-label">Protections Actives</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">30 sec</div>
                    <div class="stat-label">Temps de réponse moyen</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Stratégies de sécurité</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99.98%</div>
                    <div class="stat-label">Efficacité prouvée</div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            
            <p>&copy; 2026 CyberShield AI. Tous droits réservés. Protection des données et confidentialité garanties.</p>
        </div>
    </footer>

    <script>
        // Création de l'animation cybersécurité
        document.addEventListener('DOMContentLoaded', function() {
            const cyberVisual = document.getElementById('cyberVisual');
            const nodes = [];
            const connections = [];
            
            // Créer des nœuds aléatoires
            for (let i = 0; i < 15; i++) {
                const node = document.createElement('div');
                node.classList.add('cyber-node');
                
                // Position aléatoire mais pas trop proche du centre
                let x, y;
                if (i < 5) {
                    // Nœuds à gauche
                    x = 20 + Math.random() * 30;
                    y = 20 + Math.random() * 80;
                } else if (i < 10) {
                    // Nœuds à droite
                    x = 70 + Math.random() * 25;
                    y = 20 + Math.random() * 80;
                } else {
                    // Nœuds en haut et en bas
                    x = 20 + Math.random() * 60;
                    y = i % 2 === 0 ? 15 + Math.random() * 10 : 75 + Math.random() * 10;
                }
                
                node.style.left = `${x}%`;
                node.style.top = `${y}%`;
                
                // Taille aléatoire
                const size = 8 + Math.random() * 8;
                node.style.width = `${size}px`;
                node.style.height = `${size}px`;
                
                // Opacité aléatoire
                node.style.opacity = 0.6 + Math.random() * 0.4;
                
                cyberVisual.appendChild(node);
                nodes.push({ element: node, x, y });
                
                // Animation de pulsation
                pulseAnimation(node);
            }
            
            // Créer des connexions entre les nœuds
            for (let i = 0; i < nodes.length; i++) {
                // Connecter chaque nœud à 2-3 autres nœuds
                const numConnections = 2 + Math.floor(Math.random() * 2);
                const connectedIndices = new Set();
                
                for (let j = 0; j < numConnections; j++) {
                    let targetIndex;
                    do {
                        targetIndex = Math.floor(Math.random() * nodes.length);
                    } while (targetIndex === i || connectedIndices.has(targetIndex));
                    
                    connectedIndices.add(targetIndex);
                    
                    const connection = document.createElement('div');
                    connection.classList.add('cyber-connection');
                    
                    const startNode = nodes[i];
                    const endNode = nodes[targetIndex];
                    
                    // Calculer la distance et l'angle entre les nœuds
                    const dx = endNode.x - startNode.x;
                    const dy = endNode.y - startNode.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    const angle = Math.atan2(dy, dx) * 180 / Math.PI;
                    
                    connection.style.width = `${distance}%`;
                    connection.style.left = `${startNode.x}%`;
                    connection.style.top = `${startNode.y}%`;
                    connection.style.transform = `rotate(${angle}deg)`;
                    connection.style.opacity = 0.3 + Math.random() * 0.4;
                    
                    cyberVisual.appendChild(connection);
                    connections.push(connection);
                    
                    // Animation de connexion
                    connectionAnimation(connection);
                }
            }
            
            // Animation de pulsation pour les nœuds
            function pulseAnimation(node) {
                let scale = 1;
                let growing = true;
                
                function animate() {
                    if (growing) {
                        scale += 0.01;
                        if (scale >= 1.3) growing = false;
                    } else {
                        scale -= 0.01;
                        if (scale <= 1) growing = true;
                    }
                    
                    node.style.transform = `scale(${scale})`;
                    requestAnimationFrame(animate);
                }
                
                // Démarrer l'animation après un délai aléatoire
                setTimeout(() => {
                    animate();
                }, Math.random() * 2000);
            }
            
            // Animation pour les connexions
            function connectionAnimation(connection) {
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
                    
                    connection.style.opacity = opacity;
                    requestAnimationFrame(animate);
                }
                
                // Démarrer l'animation après un délai aléatoire
                setTimeout(() => {
                    animate();
                }, Math.random() * 2000);
            }
            
            // Animation pour le bouclier central
            const shield = document.querySelector('.cyber-shield');
            let shieldRotation = 0;
            
            function rotateShield() {
                shieldRotation += 0.1;
                shield.style.transform = `translate(-50%, -50%) rotate(${shieldRotation}deg)`;
                requestAnimationFrame(rotateShield);
            }
            
            rotateShield();
        });
    </script>
</body>
</html>