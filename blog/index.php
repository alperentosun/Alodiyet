<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Blog</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/blog/css/style.css?v=<?php echo time(); ?>">
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
        
        /* Blog sayfası stilleri */
        .blog-banner {
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
        
        .blog-banner img {
            width: 100%;
            max-width: 1200px;
            height: auto;
            display: block;
            object-fit: contain;
        }
        
        .blog-title {
            position: absolute;
            left: 5%;
            top: 50%;
            transform: translateY(-50%);
            font-size: 48px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            width: auto;
            max-width: 90%;
            text-align: left;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }
        
        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px 40px;
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .blog-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
        }
        
        .blog-card-image {
            width: 100%;
            height: 180px;
            overflow: hidden;
        }
        
        .blog-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .blog-card-content {
            padding: 15px;
        }
        
        .blog-card-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0 0 10px;
        }
        
        .blog-card-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        .blog-card-link {
            display: flex;
            align-items: center;
            color: #f18518;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        
        .blog-card-link i {
            margin-left: 5px;
            transition: transform 0.2s ease;
        }
        
        .blog-card-link:hover i {
            transform: translateX(3px);
        }
        
        @media (min-width: 1400px) {
            .blog-banner {
                margin-top: 20px;
                margin-bottom: 30px;
            }
            
            .blog-banner img {
                width: 100%;
            }
        }
        @media (max-width: 576px) {
            .blog-banner {
                margin-top: 15px;
                margin-bottom: 25px;
            }
            
            .blog-banner img {
                width: 100%;
            }
        }
        @media (max-width: 992px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .blog-title {
                font-size: 40px;
            }
        }
        
        @media (max-width: 768px) {
            .blog-title {
                font-size: 32px;
            }
        }
        
        @media (max-width: 576px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }
            
            .blog-title {
                font-size: 24px;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>

<!-- Blog Banner -->
<div class="blog-banner">
    <img src="/alodiyet/alodiyetresimler/blog.png" alt="AloDiyet Blog">
    <!-- <h1 class="blog-title">Blog</h1> -->
</div>

<div class="blog-container">
    <div class="blog-grid">
        <!-- Blog Card 1 -->
        <div class="blog-card">
            <div class="blog-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="blog-card-content">
                <h3 class="blog-card-title">AloDiyet Nasıl Çalışır?</h3>
                <p class="blog-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="blog-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Blog Card 2 -->
        <div class="blog-card">
            <div class="blog-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="blog-card-content">
                <h3 class="blog-card-title">AloDiyet Nasıl Çalışır?</h3>
                <p class="blog-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="blog-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Blog Card 3 -->
        <div class="blog-card">
            <div class="blog-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="blog-card-content">
                <h3 class="blog-card-title">AloDiyet Nasıl Çalışır?</h3>
                <p class="blog-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="blog-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    
    <div class="blog-grid">
        <!-- Blog Card 4 -->
        <div class="blog-card">
            <div class="blog-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="blog-card-content">
                <h3 class="blog-card-title">AloDiyet Nasıl Çalışır?</h3>
                <p class="blog-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="blog-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Blog Card 5 -->
        <div class="blog-card">
            <div class="blog-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="blog-card-content">
                <h3 class="blog-card-title">AloDiyet Nasıl Çalışır?</h3>
                <p class="blog-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="blog-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Blog Card 6 -->
        <div class="blog-card">
            <div class="blog-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="blog-card-content">
                <h3 class="blog-card-title">AloDiyet Nasıl Çalışır?</h3>
                <p class="blog-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="blog-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
            </div>
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