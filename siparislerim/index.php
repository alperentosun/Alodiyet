<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Sağlıklı Beslenme</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/siparislerim/css/style.css">
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
        
        /* Banner section responsive düzenlemesi */
        .banner-section {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin: 0 auto;
        }
        
        .banner-wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .banner-image {
            width: 100%;
            height: auto;
            max-width: 100%;
            object-fit: contain;
            display: block;
        }
        
        /* Order products responsive düzenlemesi */
        @media (max-width: 767px) {
            .order-product-details {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
            }
            
            .order-product-title {
                width: 100%;
                margin-bottom: 8px;
                text-align: left;
                font-size: 16px;
            }
            
            .order-product-desc {
                width: 100%;
                margin-bottom: 12px;
                text-align: left;
                font-size: 14px;
                clear: both;
                display: block;
            }
            
            .order-status-badge {
                display: block;
                margin-top: 8px;
                align-self: flex-start;
                clear: both;
                float: none;
                position: relative;
                width: auto;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>


<div class="user-nav-container">
    <div class="user-nav-buttons">
        <a href="/alodiyet/siparislerim/index.php" class="user-nav-btn active"><i class="fas fa-shopping-basket" style="color: #f18518 !important; margin-right: 12px;"></i> Siparişlerim</a>
        <a href="#" class="user-nav-btn"><i class="far fa-heart" style="color: #f18518 !important; margin-right: 12px;"></i> Favorilerim</a>
        <a href="/alodiyet/profilayarlar/index.php" class="user-nav-btn"><i class="fas fa-user-cog" style="color: #f18518 !important; margin-right: 12px;"></i> Profil Ayarları</a>
    </div>
    <div class="user-profile-info">
        <span class="user-name">İlter Türkmen</span>
        <span class="user-email">ilterturkmen@gmail.com</span>
        <img src="/alodiyet/alodiyetresimler/kullaniciresim.png" alt="Profil" class="user-profile-img">
    </div>
</div>

<section class="orders-mainv2">
    <div class="container">
        <div class="orders-header">
            <h2 class="orders-title">Siparişlerim</h2>
            
            <div class="orders-tabs">
                <button class="order-tab-btn active" data-tab="all">Tüm Siparişlerim</button>
                <button class="order-tab-btn" data-tab="active">Devam Eden Siparişlerim</button>
                <button class="order-tab-btn" data-tab="cancelled">İptal Olan Siparişlerim</button>
            </div>
        </div>
        
        <div class="orders-tabs-content">
            <!-- Tüm Siparişler -->
            <div class="orders-tab-content active" id="tab-all">
                <div class="orders-list-new">
                    
                    <!-- Sipariş 1 -->
                    <div class="order-row">
                        <div class="order-info-section">
                            <div class="order-info-col">
                                <div class="order-info-label">Sipariş Tarihi</div>
                                <div class="order-info-value">25.04.2023 - 14:35</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Sipariş Özeti</div>
                                <div class="order-info-value">1 Ürün Teslim Edildi</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Alıcı</div>
                                <div class="order-info-value">İlter Türkmen</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Tutar</div>
                                <div class="order-info-value price">7.000 TL</div>
                            </div>
                            <div class="order-info-col order-action-col">
                                <a href="/alodiyet/siparisteslimdetay/index.php" class="order-detail-link">Sipariş Detay</a>
                            </div>
                        </div>
                        <div class="order-product-section"  style="cursor: pointer;">
                            <div class="order-product-img-container">
                                <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket" class="order-product-image">
                            </div>
                            <div class="order-product-details">
                                <h3 class="order-product-title">Fast Plus Paket</h3>
                                <p class="order-product-desc">30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                                <div class="order-status-badge teslim">Teslim Edildi</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sipariş 2 -->
                    <div class="order-row">
                        <div class="order-info-section">
                            <div class="order-info-col">
                                <div class="order-info-label">Sipariş Tarihi</div>
                                <div class="order-info-value">25.04.2023 - 14:35</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Sipariş Özeti</div>
                                <div class="order-info-value">1 Ürün Hazırlanıyor</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Alıcı</div>
                                <div class="order-info-value">İlter Türkmen</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Tutar</div>
                                <div class="order-info-value price">7.000 TL</div>
                            </div>
                            <div class="order-info-col order-action-col">
                                <a href="/alodiyet/siparisteslimdetay/index.php" class="order-detail-link">Sipariş Detay</a>
                            </div>
                        </div>
                        <div class="order-product-section"  style="cursor: pointer;">
                            <div class="order-product-img-container">
                                <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket" class="order-product-image">
                            </div>
                            <div class="order-product-details">
                                <h3 class="order-product-title">Fast Plus Paket</h3>
                                <p class="order-product-desc">30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                                <div class="order-status-badge hazirlaniyor">Hazırlanıyor</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Devam Eden Siparişler -->
            <div class="orders-tab-content" id="tab-active">
                <div class="orders-list-new">
                    <!-- Sipariş 2 -->
                    <div class="order-row">
                        <div class="order-info-section">
                            <div class="order-info-col">
                                <div class="order-info-label">Sipariş Tarihi</div>
                                <div class="order-info-value">25.04.2023 - 14:35</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Sipariş Özeti</div>
                                <div class="order-info-value">1 Ürün Hazırlanıyor</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Alıcı</div>
                                <div class="order-info-value">İlter Türkmen</div>
                            </div>
                            <div class="order-info-col">
                                <div class="order-info-label">Tutar</div>
                                <div class="order-info-value price">7.000 TL</div>
                            </div>
                            <div class="order-info-col order-action-col">
                                <a href="/alodiyet/siparisteslimdetay/index.php" class="order-detail-link">Sipariş Detay</a>
                            </div>
                        </div>
                        <div class="order-product-section" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                            <div class="order-product-img-container">
                                <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket" class="order-product-image">
                            </div>
                            <div class="order-product-details">
                                <h3 class="order-product-title">Fast Plus Paket</h3>
                                <p class="order-product-desc">30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                                <div class="order-status-badge hazirlaniyor">Hazırlanıyor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- İptal Edilen Siparişler -->
            <div class="orders-tab-content" id="tab-cancelled">
                <div class="orders-list-new">
                    <!-- Buraya iptal edilen siparişler gelecek -->
                    <div class="empty-orders">
                        <p>İptal edilen siparişiniz bulunmamaktadır.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner-section">
    <div class="container">
        <div class="banner-wrapper">
            <img src="/alodiyet/alodiyetresimler/BANNER1yatay.png" alt="AloDiyet Banner" class="banner-image">
        </div>
    </div>
</section>

<div class="extra-products-row" style="margin: 32px auto;">
    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
        <div class="product-image">
            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Ekstra Ürün 1">
            <div class="product-badge">%10 İndirim</div>
        </div>
        <div class="product-content">
            <h4>Ekstra Ürün 1</h4>
            <p>Her hafta değişen sağlıklı menü ile fit kalın.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price-actions">
                <div class="price">
                    <span class="old-price">8.500</span>
                    <span class="current-price">6.900 <span>TL</span></span>
                </div>
                <div class="actions">
                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
        <div class="product-image">
            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Ekstra Ürün 2">
            <div class="product-badge">%12 İndirim</div>
        </div>
        <div class="product-content">
            <h4>Ekstra Ürün 2</h4>
            <p>Lezzetli ve pratik diyet paketleri burada.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price-actions">
                <div class="price">
                    <span class="old-price">7.200</span>
                    <span class="current-price">5.900 <span>TL</span></span>
                </div>
                <div class="actions">
                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
        <div class="product-image">
            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Ekstra Ürün 3">
            <div class="product-badge">%8 İndirim</div>
        </div>
        <div class="product-content">
            <h4>Ekstra Ürün 3</h4>
            <p>Detoks ve sağlıklı yaşam için ideal seçim.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price-actions">
                <div class="price">
                    <span class="old-price">6.800</span>
                    <span class="current-price">5.200 <span>TL</span></span>
                </div>
                <div class="actions">
                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
        <div class="product-image">
            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Ekstra Ürün 4">
            <div class="product-badge">%15 İndirim</div>
        </div>
        <div class="product-content">
            <h4>Ekstra Ürün 4</h4>
            <p>Sağlıklı beslenmenin en kolay yolu.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price-actions">
                <div class="price">
                    <span class="old-price">7.500</span>
                    <span class="current-price">6.400 <span>TL</span></span>
                </div>
                <div class="actions">
                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Slider indikatörleri - mobilde kaydırma noktaları -->
<div class="slider-indicators">
    <span class="slider-indicator active"></span>
    <span class="slider-indicator"></span>
</div>

<section class="fitndetox-info-bottom">
    <div class="container">
        <p>Fit'N Detox Paketi ile 21 Günde Vücudunu Yenile</p>
        <p>Yoğun hayat temposunda sağlıklı beslenmek ve ideal kiloya ulaşmak isteyenler için Alodiyet'in 21 günlük Fit'N Detox paketi, dengeli içeriği ve yenilenen menüleriyle etkili bir çözüm sunar. Bu program, yalnızca kilo vermeyi değil, aynı zamanda vücudu arındırmayı ve sağlıklı beslenme alışkanlıkları kazandırmayı hedefler.</p>
        <p>Detoks ve Doyuruculuk Bir Arada</p>
        <p>Fit'N Detox, 6 gün boyunca katı ve sıvı öğünlerin dengeli kombinasyonunu sunar. 7. gün ise tamamen sıvı detoks uygulanır. Bu döngü üç hafta boyunca tekrarlanarak vücudu hem besler hem de arındırır.</p>
        <p>Uzman Diyetisyen Kontrolünde</p>
        <p>Paket içeriği, alanında uzman diyetisyenler tarafından planlanır. Günlük kalori ihtiyacına göre oluşturulan menüler her hafta yenilenir. Bu sayede beslenme süreci monotonluktan uzak, lezzetli ve motive edicidir.</p>
        <p>Pratik ve Hijyenik Sunum</p>
        <p>Tüm öğünler, gıdaya uygun ve mikrodalgada ısıtılabilir özel kaplarla teslim edilir. İş yerinde ya da evde kolaylıkla tüketilebilir yapıdadır.</p>
        <p>Kalitesi Belgelenmiş Bir Marka</p>
        <p>Alodiyet, ISO 9001, ISO 22000 ve ISO 10002 belgelerine sahiptir. 2022 yılında "Yılın Önerilen Markası" seçilerek kalitesini tescillemiştir.</p>
        <p>Şimdi Başla, 21 Günde Değişimi Hisset<p>
        <p>Fit'N Detox ile vücudunu arındır, sağlıklı yaşama güçlü bir başlangıç yap.<br>Detaylı bilgi ve sipariş için:<br>alodiyet.net/fitndetox</p>
    </div>
</section>

<div class="whatsapp-float" style="display: flex; position: fixed; bottom: 20px; left: 20px; z-index: 1000; background: none; box-shadow: none;">
        <a href="https://wa.me/908502206685" style="display: flex; align-items: center; justify-content: center; text-decoration: none;">
            <img src="/alodiyet/alodiyetresimler/whatsapp.png" alt="WhatsApp" style="width: 35px; height: 35px;">
        </a>
    </div>



<script>
// Tab geçişi için JavaScript
const orderTabBtns = document.querySelectorAll('.order-tab-btn');
const orderTabContents = document.querySelectorAll('.orders-tab-content');

orderTabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
        orderTabBtns.forEach(b => b.classList.remove('active'));
        orderTabContents.forEach(tc => tc.classList.remove('active'));
        
        this.classList.add('active');
        document.getElementById('tab-' + this.dataset.tab).classList.add('active');
    });
});

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
    
    // Mobil cihaz kontrolü 
    function isMobile() {
        return window.innerWidth <= 600;
    }
    
    function initMobileSliders() {
        if (!isMobile()) {
            // Masaüstünde slider özelliklerini iptal et
            const sliders = document.querySelectorAll('.extra-products-row');
            sliders.forEach(function(slider) {
                slider.style.overflowX = 'visible';
                slider.style.scrollSnapType = 'none'; 
            });
            
            // Mobil değilse göstergeleri gizle
            const indicators = document.querySelectorAll('.slider-indicators');
            indicators.forEach(function(indicator) {
                indicator.style.display = 'none';
            });
            
            // Masaüstü modunda sipariş bölüm sıralamasını sıfırla
            document.querySelectorAll('.order-row').forEach(function(orderRow) {
                orderRow.querySelector('.order-info-section').style.order = '';
                orderRow.querySelector('.order-product-section').style.order = '';
            });
            
            return;
        }
        
        // Mobil görünümde sipariş bölümlerini yeniden sırala
        document.querySelectorAll('.order-row').forEach(function(orderRow) {
            orderRow.style.display = 'flex';
            orderRow.style.flexDirection = 'column';
            orderRow.querySelector('.order-info-section').style.order = '2';
            orderRow.querySelector('.order-product-section').style.order = '1';
            
            // Ürün bölümünün mobil görünümünü iyileştir
            const productSection = orderRow.querySelector('.order-product-section');
            productSection.style.display = 'flex';
            productSection.style.flexDirection = 'row';
            productSection.style.alignItems = 'flex-start';
            productSection.style.justifyContent = 'flex-start';
            productSection.style.textAlign = 'left';
            productSection.style.padding = '15px 10px';
            
            // Ürün resmini düzenle
            const imgContainer = productSection.querySelector('.order-product-img-container');
            imgContainer.style.width = '80px';
            imgContainer.style.minWidth = '80px';
            imgContainer.style.marginRight = '15px';
            imgContainer.style.alignSelf = 'flex-start';
            
            // Ürün detaylarını düzenle
            const productDetails = productSection.querySelector('.order-product-details');
            productDetails.style.flex = '1';
            productDetails.style.textAlign = 'left';
            productDetails.style.display = 'flex';
            productDetails.style.flexDirection = 'column';
            productDetails.style.alignItems = 'flex-start';
            
            // Ürün başlığını düzenle
            const productTitle = productDetails.querySelector('.order-product-title');
            if (productTitle) {
                productTitle.style.margin = '0 0 5px 0';
                productTitle.style.fontSize = '16px';
            }
            
            // Ürün açıklamasını düzenle
            const productDesc = productDetails.querySelector('.order-product-desc');
            if (productDesc) {
                productDesc.style.margin = '0 0 10px 0';
                productDesc.style.fontSize = '14px';
            }
            
            // Durum badge'ini düzenle
            const statusBadge = productDetails.querySelector('.order-status-badge');
            if (statusBadge) {
                statusBadge.style.alignSelf = 'flex-start';
            }
        });
        
        // Mobil cihazda slider ayarlarını uygula
        const sliders = document.querySelectorAll('.products-row, .extra-products-row, .detox4-cards');
        
        sliders.forEach(function(slider) {
            // İşlem yapılacak elemanları belirle (product-card veya detox4-card)
            const cardClassName = slider.classList.contains('detox4-cards') ? '.detox4-card' : '.product-card';
            
            // Doğrudan stil uygula
            slider.style.display = 'flex';
            slider.style.flexDirection = 'row';
            slider.style.flexWrap = 'nowrap';
            slider.style.overflowX = 'auto';
            slider.style.scrollSnapType = 'x mandatory';
            slider.style.gap = '12px';
            slider.style.padding = '0 12px';
            slider.style.webkitOverflowScrolling = 'touch';
            slider.style.paddingBottom = '15px';
            slider.style.marginBottom = '20px';
            slider.style.justifyContent = 'flex-start';
            
            // Slider scroll çubuğunu gizle
            slider.style.scrollbarWidth = 'none';
            slider.style.msOverflowStyle = 'none';
            
            // Webkit için scroll çubuğu gizleme
            const style = document.createElement('style');
            style.textContent = `.products-row::-webkit-scrollbar, .extra-products-row::-webkit-scrollbar, .detox4-cards::-webkit-scrollbar { display: none; }`;
            document.head.appendChild(style);
            
            // İndikatörleri güncelleme
            const indicators = slider.nextElementSibling && slider.nextElementSibling.classList.contains('slider-indicators') 
                ? slider.nextElementSibling 
                : null;
                
            const indicatorDots = indicators && indicators.classList.contains('slider-indicators') 
                ? indicators.querySelectorAll('.slider-indicator') 
                : null;
            
            if (indicatorDots) {
                indicators.style.display = 'flex';
                
                indicatorDots.forEach((dot, index) => {
                    dot.addEventListener('click', function() {
                        const cardWidth = slider.offsetWidth / 2; // Her görünümde 2 kart
                        const targetScroll = index * cardWidth;
                        
                        slider.scrollTo({
                            left: targetScroll,
                            behavior: 'smooth'
                        });
                        
                        // İndikatörleri güncelle
                        indicatorDots.forEach((d, i) => {
                            d.classList.toggle('active', i === index);
                        });
                    });
                });
            }
        });
    }
    
    // İlk yükleme ve pencere yeniden boyutlandırıldığında
    initMobileSliders();
    window.addEventListener('resize', initMobileSliders);
});
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<?php include '../includes/footer.php'; ?> 