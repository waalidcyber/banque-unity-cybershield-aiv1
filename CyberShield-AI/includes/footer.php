  <style>
    /* Footer CyberShield AI */
    footer {
        background: rgba(10, 14, 23, 0.95);
        border-top: 1px solid rgba(64, 224, 208, 0.2);
        padding: 60px 0 30px;
        margin-top: 80px;
        position: relative;
        overflow: hidden;
    }
    
    footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(64, 224, 208, 0.5), 
            transparent
        );
    }
    
    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .footer-column h3 {
        color: #40e0d0;
        font-size: 20px;
        margin-bottom: 20px;
        font-weight: 600;
        position: relative;
        padding-bottom: 10px;
    }
    
    .footer-column h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 2px;
        background: linear-gradient(to right, #40e0d0, #20b2aa);
        border-radius: 2px;
    }
    
    .footer-column p {
        color: #b0b0b0;
        line-height: 1.6;
        font-size: 15px;
        max-width: 300px;
    }
    
    .footer-column ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-column ul li {
        margin-bottom: 12px;
        color: #b0b0b0;
        font-size: 15px;
        line-height: 1.5;
    }
    
    .footer-column ul li:last-child {
        margin-bottom: 0;
    }
    
    .footer-column a {
        color: #b0b0b0;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        padding-left: 20px;
    }
    
    .footer-column a::before {
        content: '▸';
        position: absolute;
        left: 0;
        color: #40e0d0;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .footer-column a:hover {
        color: #40e0d0;
        padding-left: 25px;
    }
    
    .footer-column a:hover::before {
        opacity: 1;
    }
    
    .footer-column ul li:not(:has(a)) {
        padding-left: 20px;
        position: relative;
    }
    
    .footer-column ul li:not(:has(a))::before {
        content: '▸';
        position: absolute;
        left: 0;
        color: #40e0d0;
        font-size: 12px;
    }
    
    .copyright {
        text-align: center;
        padding-top: 30px;
        border-top: 1px solid rgba(64, 224, 208, 0.1);
        color: #888;
        font-size: 14px;
    }
    
    /* Effets cyber dans le footer */
    .cyber-footer-node {
        position: absolute;
        width: 4px;
        height: 4px;
        background-color: #40e0d0;
        border-radius: 50%;
        opacity: 0.3;
        pointer-events: none;
    }
    
    /* Animation pour les nodes du footer */
    @keyframes nodePulse {
        0%, 100% { opacity: 0.1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(1.2); }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        footer {
            padding: 40px 0 20px;
        }
        
        .footer-column h3 {
            font-size: 18px;
        }
    }
</style>  
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>CyberShield AI</h3>
                    <p>Votre destination beauté et cosmétiques en ligne.</p>
                </div>
                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li>Email: info@CyberShield AI.com</li>
                        <li>Tél: +33 1 23 45 67 89</li>
                        <li>Adresse: 123 Avenue des Champs-Élysées, Paris</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 CyberShield AI. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>