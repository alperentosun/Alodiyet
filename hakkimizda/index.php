<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Hakkımızda</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/hakkimizda/css/style.css?v=<?php echo time(); ?>">
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
        
        /* Hakkımızda sayfası stilleri */
        .hakkimizda-banner {
            width: 100%;
            margin-bottom: 10px;
            overflow: hidden;
            position: relative;
            max-height: none;
            display: flex;
            justify-content: center;
            
        }
        
        .hakkimizda-banner img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: contain;
            max-width: 1400px;
        }
        
        .hakkimizda-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .section-title {
            color: #333;
            font-size: 22px;
            font-weight: unset;
            margin-bottom: 15px;
            font-family: 'Poppins', sans-serif;
            position: relative;
            display: inline-block;
        }
        
        .section-text {
            color: #555;
            line-height: 1.6;
            font-size: 15px;
            margin-bottom: 30px;
            font-family: 'Poppins', sans-serif;
        }
        
        .certification-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 50px;
            margin-bottom: 30px;
            gap: 20px;
        }
        
        .certification-item {
            flex: 0 0 calc(33.33% - 20px);
            min-width: 0;
            max-width: none;
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #eee;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
        }
        
        .certification-item p {
            margin: 0;
            color: #333;
            font-size: 14px;
        }
        
        .certification-item img {
            width: 24px;
            height: auto;
            margin: 0;
            display: block;
        }
        
        .certification-item:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 20px;
            }
            
            .certification-section {
                justify-content: space-between;
            }
            
            .certification-item {
                flex: 0 0 calc(50% - 10px);
            }
        }
        
        @media (max-width: 600px) {
            .hakkimizda-banner {
                max-height: none;
            }
            
            .section-title {
                font-size: 18px;
            }
            
            .section-text {
                font-size: 14px;
            }
            
            .certification-item {
                flex: 0 0 100%;
            }
        }
        
        @media (min-width: 1400px) {
            .hakkimizda-banner img {
                width: 100%;
                max-width: 1400px;
            }
        }
        
        @media (min-width: 1600px) {
            .hakkimizda-banner {
                padding: 0;
            }
            
            .hakkimizda-content {
                max-width: 1200px;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>

<!-- Hakkımızda Banner -->
<div class="hakkimizda-banner">
    <img src="/alodiyet/alodiyetresimler/hakkimizda.png" alt="AloDiyet Hakkımızda">
</div>

<div class="hakkimizda-content">
    <div class="vision-section">
        <h2 class="section-title">VİZYONUMUZ:</h2>
        <p class="section-text">
            Her bireyin farklılığı ve sağlıklı beslenme hakkına sahip olduğu inancıyla, bireylerin ideal beslenmerine ulaşmaları ve sağlıklı bir yaşam sürmelerini destekleyen, tüm dünyada dengesiz ve sağlıksız beslenmeden kaynaklanan hastalıkların artışla mücadele ediyoruz. Diyetisyen denetimi ve bilimlerle uyumlu beslenme planları geliştirerek sağlıklı beslenmeyi bilimsel temellere dayandırarak güvenilir hale getiriyoruz. Yoğun çalışma hayatı ve hızlı tüketim alışkanlıklarının alternatifi olarak fast food anlayışının sağlıklı, pratik ve lezzetli bir yaşamla yeniden tanımlanmasını, Sağlıklı beslenmeyi herkes için erişilebilir kılarak toplumun yaşam kalitesini arttırmayı ve bu alanda küresel bir lider olmayı hedefliyoruz. Kısa vadede 2025 yılın 10 şube ile tamamlayıp şirketi istikrarlı hale getirmeyi planlıyoruz.
        </p>
    </div>
    
    <div class="mission-section">
        <h2 class="section-title">MİSYONUMUZ:</h2>
        <p class="section-text">
            Bilimsel temellere dayanan, diyetisyen denetimiyle hazırlanmış sağlıklı, dengeli ve lezzetli çözümler, bireylerin ihtiyaçlarına göre özelleştirilmiş sunuyoruz. Danışanlarımızın ideal beslenmerine ulaşmaları, sağlıklı yaşam hedeflerine bağlı kalmalarını ve bu süreçte sürekli kontrol altında olduklarını hissettirmeleri sağlıyoruz. Yoğun çalışma hayatı ve hızlı tüketim alışkanlıklarına sağlıklı alternatifler sunarak, bireylerin yaşam kalitesini arttırmak ve sağlıklı beslenmeyi, kolay, pratik ve erişilebilir hale getirmek için çalışıyoruz.
        </p>
    </div>
    
    <div class="certification-section">
        <div class="certification-item">
            <p>TSE EN ISO 9001:2005</p>
            <img src="/alodiyet/alodiyetresimler/download-line.png" alt="Download">
        </div>
        <div class="certification-item">
            <p>TSE EN ISO 9001:2005</p>
            <img src="/alodiyet/alodiyetresimler/download-line.png" alt="Download">
        </div>
        <div class="certification-item">
            <p>TSE EN ISO 9001:2005</p>
            <img src="/alodiyet/alodiyetresimler/download-line.png" alt="Download">
        </div>
        <div class="certification-item">
            <p>TSE EN ISO 9001:2005</p>
            <img src="/alodiyet/alodiyetresimler/download-line.png" alt="Download">
        </div>
        <div class="certification-item">
            <p>TSE EN ISO 9001:2005</p>
            <img src="/alodiyet/alodiyetresimler/download-line.png" alt="Download">
        </div>
        <div class="certification-item">
            <p>TSE EN ISO 9001:2005</p>
            <img src="/alodiyet/alodiyetresimler/download-line.png" alt="Download">
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