<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Blog Detay</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/blogdetay/css/style.css?v=<?php echo time(); ?>">
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
        
        /* Blog detay sayfası stilleri */
        .blog-banner {
            width: 100%;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 230px;
        }
        
        .blog-banner img {
            width: 100%;
            height: auto;
            display: block;
            max-width: 1800px;
        }
        
        .blogdetay-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px 40px;
            display: flex;
        }
        
        .blogdetay-content {
            width: 65%;
            padding-right: 30px;
        }
        
        .blogdetay-sidebar {
            width: 30%;
        }
        
        .blogdetay-title {
            font-size: 32px;
            font-weight: 600;
            color: #333;
            margin: 0 0 20px;
            font-family: 'Poppins', sans-serif;
        }
        
        .blogdetay-date {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            display: block;
        }
        
        .blogdetay-image {
            width: 100%;
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .blogdetay-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .blogdetay-text {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 20px;
        }
        
        .blogdetay-text h3 {
            font-size: 22px;
            font-weight: 600;
            margin: 25px 0 15px;
        }
        
        .blogdetay-text p {
            margin-bottom: 15px;
        }
        
        .blogdetay-text ul, .blogdetay-text ol {
            margin-bottom: 15px;
            padding-left: 20px;
        }
        
        .blogdetay-text li {
            margin-bottom: 8px;
        }
        
        .sidebar-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .sidebar-card-header {
            padding: 15px;
            
            color: #f18518;
        }
        
        .sidebar-card-title {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
        }
        
        .sidebar-card-content {
            padding: 15px;
        }
        
        .sidebar-card-image {
            width: 100%;
            height: 180px;
            overflow: hidden;
        }
        
        .sidebar-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .sidebar-card-text {
            font-size: 14px;
            color: #666;
            margin: 15px 0;
        }
        
        .similar-posts {
            margin-top: 50px;
        }
        
        .similar-posts h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }
        
        .similar-posts-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .similar-post-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .similar-post-image {
            width: 100%;
            height: 150px;
            overflow: hidden;
        }
        
        .similar-post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .similar-post-content {
            padding: 15px;
        }
        
        .similar-post-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0 0 10px;
        }
        
        .similar-post-link {
            display: inline-flex;
            align-items: center;
            color: #f18518;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        
        .similar-post-link i {
            margin-left: 5px;
            transition: transform 0.2s ease;
        }
        
        .similar-post-link:hover i {
            transform: translateX(3px);
        }
        
        @media (max-width: 992px) {
            .blogdetay-container {
                flex-direction: column;
            }
            
            .blogdetay-content {
                width: 100%;
                padding-right: 0;
            }
            
            .blogdetay-sidebar {
                width: 100%;
                margin-top: 30px;
            }
            
            .similar-posts-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 576px) {
            .similar-posts-grid {
                grid-template-columns: 1fr;
            }
            
            .blogdetay-title {
                font-size: 24px;
            }
        }
        
        .sidebar-card.dual-cards {
            display: flex;
            gap: 15px;
            background: none;
            box-shadow: none;
            padding: 0;
        }
        
        .mini-card {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            background: #fff;
        }
        
        .mini-card-image {
            width: 100%;
            height: 120px;
            overflow: hidden;
        }
        
        .mini-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .mini-card-content {
            padding: 12px;
        }
        
        .mini-card-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0 0 8px;
        }
        
        .mini-card-text {
            font-size: 13px;
            color: #666;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        
        .mini-card-link {
            display: inline-flex;
            align-items: center;
            color: #f18518;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
        }
        
        .mini-card-link i {
            margin-left: 5px;
            transition: transform 0.2s ease;
        }
        
        .mini-card-link:hover i {
            transform: translateX(3px);
        }
        
        @media (max-width: 992px) {
            .sidebar-card.dual-cards {
                flex-direction: row;
            }
        }
        
        @media (max-width: 576px) {
            .sidebar-card.dual-cards {
                flex-direction: column;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>

<!-- Blog Banner -->
<div class="blog-banner">
    <img src="/alodiyet/alodiyetresimler/blog.png" alt="AloDiyet Blog">
</div>

<div class="blogdetay-container">
    <div class="blogdetay-content">
        <h3 class="blogdetay-title">Alo Diyet Tam Olarak Nedir?</h3>
        <span class="blogdetay-date">12 Mayıs 2025</span>
        <div class="blogdetay-text">
            <p>Alo Diyet, sağlıklı ve dengeli beslenmek isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet yemek hizmeti veren bir firmadır. Diyet yemek servisi sayesinde, zaman kaybetmeden sağlıklı ve konforlu bir deneyim yaşayabilirsiniz.
            </p>
            
            <p>Yemekler Günlük Olarak mı Hazırlanıyor?
            </p>
            <p>Evet! Kapıya teslim diyet yemekleri, her gün, günlük olarak anlaşmalı markalarımızdan temin ettiğimiz taze ve kaliteli malzemelerle hazırlanır. Diyet menü içeriklerimiz hazırlandıktan sonra hava almayacak şekilde paketlenir ve besin değerleri korunur, günlük olarak hazırlanır ve adrese teslim edilir.
            </p>
            
            <p>Alo Diyet Hangi Şehirlere Hizmet Veriyor?
            </p>
            <p>Alo Diyet, hizmet verdiği şehirlerde adrese teslim diyet yemek sunmaktadır. Türkiye genelinde 10 farklı ilde daha hizmet vermektedir, bu iller arasında; Ankara, İstanbul, Bursa, İzmir, Antalya, Eskişehir, Afyon, Adana, Mersin ve Alanya yer almaktadır.
            </p>
            
            
            <p>Alo Diyet, farklı beslenme ihtiyaçlarına yönelik çok çeşitli diyet paket servis seçeneklerisunar.
            </p>
            <p>Alo Diyet'e başlamak için web sitemizi ziyaret edebilir, telefonla iletişime geçebilir veya mobil uygulamamızı kullanabilirsiniz. Size en uygun diyet programını seçin, adres ve ödeme bilgilerinizi girin, gerisini bize bırakın!</p>
            
            <p>Paketlerimiz</p>
            <p>
            Detoks Paketi
            </p>
            <p>
            Akdeniz Diyeti Paketi

            </p>
            <p>
            Ramazan Paketi

            </p>
            <p>
            Ofis Paket

            </p>
            <p>
            Aralıklı Oruç Paketi

            </p>
            <p>
            Kilo Alma Paketi

            </p>
            <p>
            Ketojenik Paket

            </p>
            <p>
            Kilo Alma Paketi

            </p>
            <p>
            Kilo Koruma Paketi

            </p>
            <p>
            Sporcu Beslenme Paketi Vejetaryen & Vegan Paketler Glütensiz & Özel Diyet Paketleri

            </p>
            <p>
            Yemek Paketlerini Nasıl Sipariş Verebilirim?

            </p>
            <p>Sipariş vermek için web sitemizi ziyaret edebilir, ınstagram veya whatsApp hattımızdan bizimle iletişime geçerek kapıya teslim diyet yemek servisi hizmetimizden faydalanabilirsiniz.
            </p>
            <p>Kapıya Teslimat Hangi Saatler Arasında Yapılıyor?
            </p>
            <p>
            Diyet yemek eve teslim hizmetimiz, belirlenen teslimat saatleri içinde yapılmaktadır. Bulunduğunuz bölgeye göre teslimat saatleri değişiklik gösterebilir. Bulunduğunuz ilin teslimat saatları hakkında detaylı bilgi almak için bizimle iletişime geçebilirsiniz.

            </p>
            <p>
            Teslimat Ücreti Var mı?

            </p>
            <p>
            Paket fiyatlarımıza teslimat ücretlerimiz dahildir, teslimat için ayrı bir ücretlendirme bulunmamaktadır fakat teslimat ücreti, hizmet bölgesine bağlı olarak değişebilir. Bazı bölgelerde teslimat için ek ücretler yansıtılabilir. Bölgenizde ki diyet paket servisimizin ek bir ücrete tabii olup olmadığını öğrenmek için sipariş öncesinde bilgi alabilirsiniz.

            </p>
            <p>
            Siparişimi Değiştirebilir ya da İptal Edebilir miyim?

            </p>
            <p>
            Evet, tüm siparişlerinizde ilgili birimlerin bilgisi dahilinde sipariş değişikliği yapabilirsiniz. Sipariş iptali için ise size ileteceğimiz iade formunu eksiksiz bir şekilde doldurarak iade sürecinizi başlatabilirsiniz. Diyet yemek paket servis esnek iptal ve değişiklik politikalarına sahiptir. Detaylar için destek ekibimize ulaşabilirsiniz.

            </p>
            <p>
            Paketlerinizde Hangi Öğünler Bulunuyor?

            </p>
            <p>
            Diyet paketlerimiz, bireylerin ihtiyacına yönelik olarak çeşitli öğünlerde sunulmaktadır:

            </p>
            <p>
            Paketlerinizde Hangi Öğünler Bulunuyor?

            </p>
            <p>
            Kahvaltı
            </p>
            <p>
            Öğle Yemeği

            </p>
            <p>
            Akşam Yemeği

            </p>
            <p>
            Ara Öğünler (Sağlıklı atıştırmalıklar)

            </p>
            <p>
            Menülerinizi Kimler Hazırlıyor?

            </p>
            <p>
            Yemekler Alerjen veya Diyet Kısıtlamalarına Uygun mu?

            </p>
            <p>
            Evet, Alo Diyet olarak özel beslenme gereksinimlerini hassasiyetle dikkate alıyoruz. Diyet paketlerimizde glütensiz, laktozsuz ve daha bir çok özel diyet seçenekleri sunulmaktadır. Sipariş verirken özel taleplerinizi iletebilirsiniz.

            </p>
            <p>
            Alo Diyet ile sağlıklı beslenmeyi zahmetsiz hale getirin! Kapıya teslim diyet yemek servisi hakkında detaylı bilgi almak için bizimle iletişime geçebilirsiniz. 
            </p>


        </div>
    </div>
    
    <div class="blogdetay-sidebar">
        <div class="sidebar-card">
            <div class="sidebar-card-header">
                <h3 class="sidebar-card-title">AloDiyet Nasıl Çalışır?</h3>
            </div>
            <div class="sidebar-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="sidebar-card-content">
                <p class="sidebar-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="mini-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
        <div class="sidebar-card dual-cards">
            <div class="mini-card">
                <div class="mini-card-image">
                    <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
                </div>
                <div class="mini-card-content">
                    <h4 class="mini-card-title">AloDiyet Nasıl Çalışır?</h4>
                    <p class="mini-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin </p>
                    <a href="/alodiyet/blogdetay/index.php" class="mini-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="mini-card">
                <div class="mini-card-image">
                    <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
                </div>
                <div class="mini-card-content">
                    <h4 class="mini-card-title">AloDiyet Nasıl Çalışır?</h4>
                    <p class="mini-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin </p>
                    <a href="/alodiyet/blogdetay/index.php" class="mini-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
                    
                </div>
            </div>
        </div>
        
        <div class="sidebar-card">
            <div class="sidebar-card-header">
                <h3 class="sidebar-card-title">AloDiyet Nasıl Çalışır?</h3>
            </div>
            <div class="sidebar-card-image">
                <img src="/alodiyet/alodiyetresimler/blogresim.png" alt="AloDiyet Nasıl Çalışır?">
            </div>
            <div class="sidebar-card-content">
                <p class="sidebar-card-text">Alo Diyet, sağlıklı ve dengeli beslenme isteyen her bireyin ihtiyacına yönelik özel olarak hazırlanmış diyet yemeklerini günlük olarak adresinize teslim eden adrese teslim diyet.</p>
                <a href="/alodiyet/blogdetay/index.php" class="mini-card-link">Devamı <i class="fas fa-arrow-right"></i></a>
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