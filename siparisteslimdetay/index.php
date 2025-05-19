<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Sipariş Teslim Detay</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/siparisteslimdetay/css/style.css">
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
    </style>
</head>

<?php include '../includes/header.php'; ?>

<div class="user-nav-container">
    <div class="user-nav-buttons">
        <a href="/alodiyet/siparislerim/" class="user-nav-btn active"><i class="fas fa-shopping-basket" style="color: #f18518 !important; margin-right: 12px;"></i> Siparişlerim</a>
        <a href="#" class="user-nav-btn"><i class="far fa-heart" style="color: #f18518 !important; margin-right: 12px;"></i> Favorilerim</a>
        <a href="/alodiyet/kullaniciprofili/" class="user-nav-btn"><i class="fas fa-user-cog" style="color: #f18518 !important; margin-right: 12px;"></i> Profil Ayarları</a>
    </div>
    <div class="user-profile-info">
        <span class="user-name">İlter Türkmen</span>
        <span class="user-email">ilterturkmen@gmail.com</span>
        <img src="/alodiyet/alodiyetresimler/kullaniciresim.png" alt="Profil" class="user-profile-img">
    </div>
</div>

<section class="orders-mainv2">
    <div class="container">
        <div class="siparis-detay-content">
            <h1 class="siparis-baslik">Sipariş Detayı</h1>
            
            <div class="siparis-bilgileri-row">
                <div class="siparis-bilgi-col">
                    <div class="bilgi-baslik">Teslimat No</div>
                    <div class="bilgi-deger">123456789123455</div>
                </div>
                <div class="siparis-bilgi-col">
                    <div class="bilgi-baslik">Kargo Firması</div>
                    <div class="bilgi-deger kargo-logo">
                        <img src="/alodiyet/alodiyetresimler/suratkargo.png" alt="Sürat Kargo">
                    </div>
                </div>
                <div class="siparis-bilgi-col">
                    <div class="bilgi-baslik">Sipariş Tarihi</div>
                    <div class="bilgi-deger">23.04.2025 - 14:35</div>
                </div>
                <div class="siparis-bilgi-col">
                    <div class="bilgi-baslik">Sipariş Özeti</div>
                    <div class="bilgi-deger">1 Teslimat, 1 Ürün</div>
                </div>
                <div class="siparis-bilgi-col fatura-col">
                    <a href="#" class="fatura-link">
                        <span class="fatura-icon">
                            <img src="/alodiyet/alodiyetresimler/fatura-icon.png" alt="Fatura">
                        </span>
                        <span class="fatura-text">Faturamı<br>Görüntüle</span>
                    </a>
                </div>
            </div>
            
            <div class="siparis-urun-detay-row">
                <div class="left-column">
                    <div class="urun-resim">
                        <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
                    </div>
                    <div class="urun-bilgileri">
                        <h2 class="urun-baslik">Fast Plus Paket</h2>
                        <p class="urun-aciklama">30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                    </div>
                </div>
                <div class="right-column">
                    <div class="urun-fiyat-bolum">
                        <div class="fiyat-rating-row">
                            <div class="urun-fiyat">7.000 TL</div>
                            <div class="urun-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="rating-count">(125)</span>
                            </div>
                        </div>
                        <div class="siparis-butonlar">
                            <a href="#" class="siparis-buton tekrarla">Siparişi Tekrarla</a>
                            <a href="#" class="siparis-buton degerlendir">Ürünü Değerlendir</a>
                        </div>
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
    
    <div class="product-card">
        
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
    <div class="product-card">
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
    <div class="product-card">
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
    <div class="product-card">
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