<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Şubelerimiz</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/subelerimiz/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Hamburger menu için stil düzenlemeleri */
        .mobile-header {
            display: flex !important;
        }
        
        .desktop-header {
            position: relative;
        }
        
        #mobile-menu-toggle {
            display: block !important;
            cursor: pointer;
            z-index: 1000;
        }
        
        #mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 250px;
            height: 100vh;
            background: white;
            box-shadow: -2px 0 5px rgba(0,0,0,0.1);
            z-index: 999;
            padding-top: 60px;
            overflow-y: auto;
        }
        
        #mobile-menu.active {
            display: block;
        }
        
        /* Overlay for when menu is open */
        .menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 998;
        }
        
        .menu-overlay.active {
            display: block;
        }

        @media (min-width: 601px) {
            /* Desktop'ta mobil header ve menü düzenlemeleri */
            .mobile-header .mobile-header-spacer {
                display: none;
            }
            
            .mobile-header {
                position: absolute;
                right: 15px;
                top: 15px;
                width: auto;
                background: transparent;
                box-shadow: none;
                padding: 0;
            }
            
            .mobile-header .logo {
                display: none;
            }
        }
        
        /* Banner stilleri */
        .subelerimiz-banner {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            overflow: hidden;
            margin-top: 30px;
            margin-bottom: 40px;
            position: relative;
        }
        
        .subelerimiz-banner img {
            width: 100%;
            max-width: 1200px;
            height: auto;
            display: block;
            object-fit: contain;
        }
        
        /* Şubeler grid stilleri */
        .subelerimiz-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px 60px;
        }
        
        .sube-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .sube-card {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 25px 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .sube-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .sube-title {
            color: #f18518;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }
        
        .sube-address, .sube-phone {
            color: #333;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 8px;
        }
        
        @media (max-width: 991px) {
            .sube-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .subelerimiz-banner {
                margin-top: 20px;
                margin-bottom: 30px;
            }
            
            .subelerimiz-banner img {
                width: 100%;
            }
        }
        
        @media (max-width: 576px) {
            .sube-grid {
                grid-template-columns: 1fr;
            }
            
            .subelerimiz-banner {
                margin-top: 15px;
                margin-bottom: 25px;
            }
            
            .subelerimiz-banner img {
                width: 100%;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>

<!-- Şubelerimiz Banner -->
<div class="subelerimiz-banner">
    <img src="/alodiyet/alodiyetresimler/subelerimiz.png" alt="AloDiyet Şubelerimiz">
</div>

<!-- Şubelerimiz İçeriği -->
<div class="subelerimiz-container">
    <div class="sube-grid">
        <!-- Şube 1 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
        
        <!-- Şube 2 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
        
        <!-- Şube 3 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
        
        <!-- Şube 4 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
        
        <!-- Şube 5 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
        
        <!-- Şube 6 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
        
        <!-- Şube 7 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
        
        <!-- Şube 8 -->
        <div class="sube-card">
            <h3 class="sube-title">Eskişehir Şube</h3>
            <p class="sube-address">Büyükdere Mah. Akçakavak Sk. No:2/1A<br>Odunpazarı/ESKİŞEHİR</p>
            <p class="sube-phone">0530 606 40 26</p>
        </div>
    </div>
</div>

<div class="whatsapp-float" style="display: flex; position: fixed; bottom: 20px; left: 20px; z-index: 1000; background: none; box-shadow: none;">
        <a href="https://wa.me/908502206685" style="display: flex; align-items: center; justify-content: center; text-decoration: none;">
            <img src="/alodiyet/alodiyetresimler/whatsapp.png" alt="WhatsApp" style="width: 35px; height: 35px;">
        </a>
    </div>


<?php include '../includes/footer.php'; ?>

<script>
// Hamburger menüsü için JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Overlay element oluşturma
    const overlay = document.createElement('div');
    overlay.className = 'menu-overlay';
    document.body.appendChild(overlay);
    
    // Menü toggle işlevi
    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('active');
        overlay.classList.toggle('active');
    });
    
    // Overlay'a tıklanınca menüyü kapat
    overlay.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
    });
});
</script> 