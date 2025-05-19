<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - İletişim</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/iletisim/css/style.css?v=<?php echo time(); ?>">
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
        
        /* İletişim sayfası stilleri */
        .iletisim-banner {
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
        
        .iletisim-banner img {
            width: 100%;
            max-width: 1200px;
            height: auto;
            display: block;
            object-fit: contain;
        }
        
        .iletisim-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px 60px;
        }
        
        .iletisim-form-container {
            margin-bottom: 60px;
        }
        
        .iletisim-form-title {
            color: #f18518;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            font-family: 'Poppins', sans-serif;
        }
        
        .iletisim-form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: #333;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #f18518;
        }
        
        .form-group.full-width {
            grid-column: 1 / -1;
        }
        
        .checkbox-group {
            grid-column: 1 / -1;
            margin-top: 10px;
        }
        
        .checkbox-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        
        .checkbox-item input {
            margin-top: 5px;
            margin-right: 10px;
        }
        
        .checkbox-item label {
            font-size: 14px;
            color: #666;
        }
        
        .form-button {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 10px;
        }
        
        .submit-button {
            background: #22c55e;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 40px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .submit-button:hover {
            background: #1cae52;
        }
        
        .iletisim-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
            margin-top: 40px;
        }
        
        .info-item {
            flex: 1;
            min-width: 250px;
            text-align: center;
        }
        
        .info-title {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }
        
        .info-content {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }
        
        @media (max-width: 768px) {
            .iletisim-banner {
                margin-top: 20px;
                margin-bottom: 30px;
            }
            
            .iletisim-banner img {
                width: 100%;
            }
            
            .iletisim-form {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .info-item {
                flex: 100%;
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .iletisim-banner {
                margin-top: 15px;
                margin-bottom: 25px;
            }
            
            .iletisim-banner img {
                width: 100%;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>

<!-- İletişim Banner -->
<div class="iletisim-banner">
    
    <img src="/alodiyet/alodiyetresimler/iletisim.png" alt="AloDiyet iletisim">
    
    <!-- <h1 class="blog-title">Blog</h1> -->
</div>


<!-- İletişim İçeriği -->
<div class="iletisim-container">
    <div class="iletisim-form-container">
        <h2 class="iletisim-form-title">İletişim Formu</h2>
        
        <form class="iletisim-form" action="#" method="post">
            <div class="form-group">
                <label for="name">Ad</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="İlker">
            </div>
            
            <div class="form-group">
                <label for="surname">Soyad</label>
                <input type="text" id="surname" name="surname" class="form-control" placeholder="Türkmen">
            </div>
            
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="ilkerturkmen@gmail.com">
            </div>
            
            <div class="form-group">
                <label for="phone">Cep Telefonu</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="+90 555 555 55 55">
            </div>
            
            <div class="form-group full-width">
                <label for="message">Mesajınız</label>
                <textarea id="message" name="message" class="form-control" rows="5" placeholder="ilkerturkmen@gmail.com"></textarea>
            </div>
            
            <div class="checkbox-group">
                <div class="checkbox-item">
                    <input type="checkbox" id="agreement1" name="agreement1">
                    <label for="agreement1">Aboneliğimi iptal ettiğimde haftalar ortası oluyorum</label>
                </div>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="agreement2" name="agreement2">
                    <label for="agreement2">Aydınlatma Metini okudum ve Açık Rıza Metni'i okudum, anladım ve e-posta adresimi, tarafıma yapılan açık rızam verildiğini beyan ederim.</label>
                </div>
            </div>
            
            <div class="form-button">
                <button type="submit" class="submit-button">Gönder</button>
            </div>
        </form>
    </div>
    
    <div class="iletisim-info">
        <div class="info-item">
            <h3 class="info-title">Telefon</h3>
            <p class="info-content">+90 850 220 6685</p>
        </div>
        
        <div class="info-item">
            <h3 class="info-title">E-Mail</h3>
            <p class="info-content">iletisim@alodiyet.net</p>
        </div>
        
        <div class="info-item">
            <h3 class="info-title">Adres</h3>
            <p class="info-content">Büyükdere mah Ataşehirevleri sk no: 2/1A<br>Odunpazarı/Eskişehir</p>
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