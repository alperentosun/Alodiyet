<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Sepetim</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/sepetim/css/style.css?v=<?php echo time(); ?>">
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
        
        /* Konum Seçici Stilleri - Güncel */
        .location-selector-container {
            max-width: 500px;
            margin: 20px auto;
            padding: 8px 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            font-family: 'Poppins', sans-serif;
            gap: 10px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .location-button {
            display: flex;
            align-items: center;
            color: #666;
            font-size: 14px;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 6px;
            transition: background-color 0.2s ease;
        }

        .location-button:hover {
            background-color: #f0f0f0;
        }

        .location-button i {
            color: #aaa;
            margin-right: 15px;
            font-size: 16px;
        }

        .use-location-button {
            background-color: #e6f7e9;
            color: #00b050;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            white-space: nowrap;
            box-shadow: 0 1px 2px rgba(0,176,80,0.1);
        }

        .use-location-button:hover {
            background-color: #d0f0d9;
        }

        .use-location-button i {
            margin-right: 15px;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            .location-selector-container {
                flex-direction: column;
                align-items: center;
                padding: 15px;
                gap: 10px;
            }
            
            .use-location-button {
                margin-top: 5px;
                width: 100%;
                justify-content: center;
            }
            
            .location-button {
                width: 100%;
                justify-content: center;
            }
        }
        
        /* Shopping Cart Styles */
        .cart-container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            font-family: 'Poppins', sans-serif;
        }
        
        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #f2f2f2;
            padding-bottom: 15px;
        }
        
        .cart-header h2 {
            font-size: 22px;
            font-weight: unset;
            color: #333;
            margin: 0;
        }
        
        .discount-badge {
            display: flex;
            align-items: center;
            
            padding: 8px 15px;
            border-radius: 20px;
            
            font-weight: 500;
            font-size: 14px;
        }
        
        .discount-badge img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }
        
        .cart-item {
            display: flex;
            border: 1px solid #f2f2f2;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .item-image {
            width: 120px;
            flex-shrink: 0;
            margin-right: 20px;
        }
        
        .item-image img {
            width: 100%;
            border-radius: 6px;
        }
        
        .item-details-left {
            flex: 2;
            padding-right: 20px;
        }
        
        .item-details-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-left: 1px solid #eee;
            padding-left: 20px;
        }
        
        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        
        .item-header h3 {
            font-size: 18px;
            font-weight: unset;
            color: #f18518;
            margin: 0;
        }
        
        .item-rating {
            display: flex;
            align-items: center;
        }
        
        .stars {
            color: #ffc107;
            margin-right: 5px;
        }
        
        .rating-count {
            color: #777;
            font-size: 14px;
        }
        
        .item-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
            line-height: 1.5;
        }
        
        .item-delivery {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #00b050;
            margin-bottom: 15px;
        }
        
        .item-delivery i {
            margin-right: 5px;
        }
        
        .item-actions {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 0;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
        }
        
        .quantity-btn {
            background: #fff;
            border: none;
            color: #333;
            width: 40px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
        }
        
        .quantity-btn.minus {
            border-right: 1px solid #eee;
        }
        
        .quantity-btn.plus {
            border-left: 1px solid #eee;
        }
        
        .quantity-input {
            width: 60px;
            height: 36px;
            border: none;
            text-align: center;
            font-size: 18px;
            font-weight: 500;
            background: #fff;
        }
        
        .item-price {
            text-align: right;
            margin-top: 0;
        }
        
        .old-price {
            font-size: 16px;
            color: #999;
            text-decoration: line-through;
            display: block;
        }
        
        .current-price {
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }
        
        .cart-summary {
            margin-top: 20px;
            background-color: transparent;
            padding: 0;
            width: 300px;
            margin-left: auto;
            margin-right: 0;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
            font-size: 14px;
            color: #333;
        }
        
        .summary-row .amount {
            text-align: right;
        }
        
        .summary-row.total {
            font-size: 16px;
            font-weight: 600;
            margin-top: 8px;
            padding-top: 8px;
            border-top: 1px solid #eee;
        }
        
        .summary-row.total .amount {
            color: #ff6600;
        }
        
        .checkout-button {
            display: block;
            width: 70%;
            margin-left: auto;
            margin-right: 0;
            background: linear-gradient(to right, #00b050, #00c85a);
            color: white;
            font-size: 14px;
            font-weight: 500;
            padding: 10px;
            border: none;
            border-radius: 25px;
            margin-top: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,176,80,0.2);
        }
        
        .checkout-button:hover {
            background: linear-gradient(to right, #009a45, #00b552);
            box-shadow: 0 3px 6px rgba(0,176,80,0.3);
        }
        
        @media (max-width: 768px) {
            .cart-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .discount-badge {
                margin-top: 10px;
            }
            
            .cart-item {
                flex-direction: column;
            }
            
            .item-image {
                width: 100%;
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .item-details-left,
            .item-details-right {
                width: 100%;
                border-left: none;
                padding-left: 0;
                padding-right: 0;
            }
            
            .item-details-right {
                margin-top: 15px;
                padding-top: 15px;
                border-top: 1px solid #eee;
            }
            
            .item-header {
                flex-direction: column;
            }
            
            .item-rating {
                margin-top: 5px;
            }
            
            .item-actions {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
            
            .quantity-control {
                margin-bottom: 0;
            }
            
            .item-price {
                text-align: right;
                margin-top: 0;
            }
            
            .cart-summary {
                width: 100%;
                margin-top: 15px;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>

<div class="location-selector-container">
    <div class="location-button" style="padding: 6px 12px;">
        <i class="fas fa-map-marker-alt" style="margin-right: 15px;"></i>
        <span>Konumunuzu seçiniz</span>
    </div>
    <button class="use-location-button" style="padding: 8px 16px;">
        <i class="fas fa-location-arrow" style="margin-right: 15px;"></i>
        Mevcut Konumunuzu Kullanın
    </button>
</div>
<!-- Shopping Cart Section -->
<div class="cart-container">
    <div class="cart-header">
        <h2>Sepetim (1 Ürün)</h2>
        <div class="discount-badge">
            <img src="/alodiyet/alodiyetresimler/sale.png" alt="İndirim">
            <span>İkinci Üründe %50 İndirim!</span>
        </div>
    </div>

    <div class="cart-items">
        <div class="cart-item">
            <div class="item-image">
                <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
            </div>
            <div class="item-details-left">
                <div class="item-header">
                    <h3>Fast Plus Paket</h3>
                    <div class="item-rating">
                        <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        <span class="rating-count">(19)</span>
                    </div>
                </div>
                <p class="item-description">30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                <div class="item-delivery">
                    <i class="fas fa-check-circle"></i>
                    <span>Bulunduğunuz Bölgeye Aynı Gün Kargoda</span>
                </div>
            </div>
            <div class="item-details-right">
                <div class="item-actions">
                    <div class="quantity-control">
                        <button class="quantity-btn minus">-</button>
                        <input type="text" class="quantity-input" value="0" readonly>
                        <button class="quantity-btn plus">+</button>
                    </div>
                    <div class="item-price">
                        <span class="old-price">9.000</span>
                        <span class="current-price">7.000 TL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-summary">
        <div class="summary-row">
            <span>Ürün Toplamı</span>
            <span class="amount">7.000,00</span>
        </div>
        <div class="summary-row">
            <span>Kargo Toplamı</span>
            <span class="amount">118,00</span>
        </div>
        <div class="summary-row total">
            <span>Toplam</span>
            <span class="amount">7.118,00 TL</span>
        </div>
        <button class="checkout-button">Sepeti Onayla</button>
    </div>
</div>

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
    
    // Mobil cihaz kontrolü 
    function isMobile() {
        return window.innerWidth <= 600;
    }
    
    // Slider göstergeleri ve mobil slider fonksiyonları
    function initMobileSliders() {
        const productRows = document.querySelectorAll('.extra-products-row');
        const indicators = document.querySelectorAll('.slider-indicators');
        
        if (!isMobile()) {
            // Mobil değilse göstergeleri gizle
            indicators.forEach(function(indicator) {
                indicator.style.display = 'none';
            });
            return;
        }
        
        // Mobilde göstergeleri görünür yap
        indicators.forEach(function(indicator) {
            indicator.style.display = 'flex';
        });
        
        // Her ürün satırı için kaydırma olayını dinle
        productRows.forEach(function(row, rowIndex) {
            row.addEventListener('scroll', function() {
                handleSliderScroll(row, indicators[rowIndex]);
            });
            
            // İlk yüklemede göstergeleri ayarla
            handleSliderScroll(row, indicators[rowIndex]);
        });
    }
    
    // Kaydırma olayına göre göstergeleri güncelle
    function handleSliderScroll(productRow, indicator) {
        if (!indicator) return;
        
        const scrollPosition = productRow.scrollLeft;
        const rowWidth = productRow.clientWidth;
        const totalWidth = productRow.scrollWidth;
        
        // Her 2 ürün için bir gösterge
        const totalPages = Math.ceil((totalWidth - rowWidth) / rowWidth) + 1;
        
        // Mevcut sayfa
        const currentPage = Math.floor(scrollPosition / (rowWidth / 2));
        
        // Gösterge sayısını güncelle
        updateIndicators(indicator, currentPage, totalPages);
    }
    
    // Göstergeleri güncelle
    function updateIndicators(container, activePage, totalPages) {
        // Önce mevcut göstergeleri temizle
        container.innerHTML = '';
        
        // Göstergeleri oluştur
        for (let i = 0; i < totalPages; i++) {
            const indicator = document.createElement('span');
            indicator.className = 'slider-indicator';
            
            if (i === activePage) {
                indicator.classList.add('active');
            }
            
            container.appendChild(indicator);
        }
    }
    
    initMobileSliders();
    
    window.addEventListener('resize', function() {
        initMobileSliders();
    });
});
</script> 

<script>
// Konum seçici işlevselliği
document.addEventListener('DOMContentLoaded', function() {
    const locationButton = document.querySelector('.location-button');
    const useLocationButton = document.querySelector('.use-location-button');
    
    locationButton.addEventListener('click', function() {
        // Konum seçme modalı açılabilir
        alert('Konum seçme özelliği yakında eklenecek.');
    });
    
    useLocationButton.addEventListener('click', function() {
        // Mevcut konumu kullanma işlevselliği
        alert('Konum erişimi için izin gerekiyor.');
    });
});
</script> 

<script>
// Shopping cart functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize quantity input value to 1
    const quantityInput = document.querySelector('.quantity-input');
    if (quantityInput) {
        quantityInput.value = 1;
    }
    
    // Quantity buttons functionality
    const minusBtn = document.querySelector('.quantity-btn.minus');
    const plusBtn = document.querySelector('.quantity-btn.plus');
    
    if (minusBtn && plusBtn && quantityInput) {
        minusBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateCartTotals();
            }
        });
        
        plusBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            updateCartTotals();
        });
    }
    
    // Function to update cart totals based on quantity
    function updateCartTotals() {
        const quantity = parseInt(quantityInput.value);
        const unitPrice = 7000; // Base unit price (7,000 TL)
        const shippingCost = 118; // Fixed shipping cost
        
        // Calculate product total
        const productTotal = unitPrice * quantity;
        
        // Update display values
        document.querySelector('.summary-row:first-child .amount').textContent = formatPrice(productTotal);
        document.querySelector('.summary-row.total .amount').textContent = formatPrice(productTotal + shippingCost) + ' TL';
    }
    
    // Helper function to format price with commas
    function formatPrice(price) {
        return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    
    // Initialize totals on page load
    updateCartTotals();
    
    // Checkout button functionality
    const checkoutBtn = document.querySelector('.checkout-button');
    if (checkoutBtn) {
        checkoutBtn.addEventListener('click', function() {
            // Add checkout functionality here
            alert('Siparişiniz işleme alınıyor...');
            // Here you would typically redirect to a checkout page or process the order
        });
    }
});
</script> 

 