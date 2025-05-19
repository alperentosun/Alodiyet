<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Sağlıklı Beslenme</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Mobil Header -->
   
    
    <!-- Desktop Header -->
    <?php include '../includes/header.php'; ?>

    <section class="hero">
        <div class="container">
            <div class="hero-image">
                <img src="/alodiyet/alodiyetresimler/SLIDER2.png" alt="Sağlıklı Salata">
            </div>
            <div class="hero-content">
                <h2 class="hero-title">21 günde fit ve<br>tazelenmiş bir sen</h2>
                <p>21 Günlük Rich Detox Paket, her hafta yenilenen beslenme düzeni ile diyetinize keyif katacağın etkili bir şekilde kilo vermenizi destekler.</p>
                <div class="btn-slider-wrapper">
                    <a href="/alodiyet/paketlerimiz/index.php" class="btn"><img src="/alodiyet/alodiyetresimler/shopping-cart-plus.png" class="btn-icon" alt="Sepet"><span>Şimdi Sipariş Ver</span></a>
                    <div class="slider-controls">
                        <div class="prev-arrow"><i class="fas fa-arrow-left"></i></div>
                        <div class="slider-dots">
                            <span class="dot active"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                        <div class="next-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="order-types">
        <div class="container">
            <div class="order-buttons">
                <a href="#" class="order-btn mobile-only"><img src="/alodiyet/alodiyetresimler/filter.png" class="btn-icon"> Filtrele</a>
                <a href="#" class="order-btn "><i class="fas fa-star star-icon"></i> Yüksek Puanlı Ürünler</a>
                <a href="#" class="order-btn"><img src="/alodiyet/alodiyetresimler/indirimicon.png" class="btn-icon"> İndirimli Ürünler</a>
                <a href="#" class="order-btn"><i class="fas fa-heart heart-icon"></i> Favori Ürünlerim</a>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="sidebar">
                <div class="filter-group">
                    <h3 class="filter-title">Fiyat Aralığı <i class="fas fa-chevron-down"></i></h3>
                    <div class="filter-content">
                        <div class="price-range">
                            <input type="text" placeholder="En Az">
                            <input type="text" placeholder="En Çok">
                        </div>
                    </div>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Paketlerimiz <i class="fas fa-chevron-down"></i></h3>
                    <div class="filter-content">
                        <ul>
                            <li><a href="#">Kilo Verme</a></li>
                            <li><a href="#">Rich Detox</a></li>
                            <li><a href="#">Fast Paket</a></li>
                            <li><a href="#">Reset Plus Paket</a></li>
                            <li><a href="#">Reset Duo Paket</a></li>
                            <li><a href="#">Reset Plus Paket</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Kilo Koruma <i class="fas fa-chevron-down"></i></h3>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Kilo Alma <i class="fas fa-chevron-down"></i></h3>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Detox <i class="fas fa-chevron-down"></i></h3>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Sporcu <i class="fas fa-chevron-down"></i></h3>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Özel Paketler <i class="fas fa-chevron-down"></i></h3>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Kalori <i class="fas fa-chevron-down"></i></h3>
                    <div class="filter-content">
                        <ul>
                            <li><a href="#">100-150 cal</a></li>
                            <li><a href="#">100-150 cal</a></li>
                            <li><a href="#">100-150 cal</a></li>
                            <li><a href="#">100-150 cal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="products-section">
                <div class="products-row">
                    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                        <div class="product-image">
                            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
                            <div class="product-badge">%14 İndirim</div>
                        </div>
                        <div class="product-content">
                            <h4>Fast Plus Paket</h4>
                            <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price-actions">
                                <div class="price">
                                    <span class="old-price">9.500</span>
                                    <span class="current-price">7.000 <span>TL</span></span>
                                </div>
                                <div class="actions">
                                    <a href="#" class="add-to-cart"></a>
                                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                        <div class="product-image">
                            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
                            <div class="product-badge">%14 İndirim</div>
                        </div>
                        <div class="product-content">
                            <h4>Fast Plus Paket</h4>
                            <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price-actions">
                                <div class="price">
                                    <span class="old-price">9.500</span>
                                    <span class="current-price">7.000 <span>TL</span></span>
                                </div>
                                <div class="actions">
                                    <a href="#" class="add-to-cart"></a>
                                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                        <div class="product-image">
                            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
                            <div class="product-badge">%14 İndirim</div>
                        </div>
                        <div class="product-content">
                            <h4>Fast Plus Paket</h4>
                            <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price-actions">
                                <div class="price">
                                    <span class="old-price">9.500</span>
                                    <span class="current-price">7.000 <span>TL</span></span>
                                </div>
                                <div class="actions">
                                    <a href="#" class="add-to-cart"></a>
                                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                        <div class="product-image">
                            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
                            <div class="product-badge">%14 İndirim</div>
                        </div>
                        <div class="product-content">
                            <h4>Fast Plus Paket</h4>
                            <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price-actions">
                                <div class="price">
                                    <span class="old-price">9.500</span>
                                    <span class="current-price">7.000 <span>TL</span></span>
                                </div>
                                <div class="actions">
                                    <a href="#" class="add-to-cart"></a>
                                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                        <div class="product-image">
                            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
                            <div class="product-badge">%14 İndirim</div>
                        </div>
                        <div class="product-content">
                            <h4>Fast Plus Paket</h4>
                            <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price-actions">
                                <div class="price">
                                    <span class="old-price">9.500</span>
                                    <span class="current-price">7.000 <span>TL</span></span>
                                </div>
                                <div class="actions">
                                    <a href="#" class="add-to-cart"></a>
                                    <a href="#" class="add-to-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                        <div class="product-image">
                            <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Fast Plus Paket">
                            <div class="product-badge">%14 İndirim</div>
                        </div>
                        <div class="product-content">
                            <h4>Fast Plus Paket</h4>
                            <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price-actions">
                                <div class="price">
                                    <span class="old-price">9.500</span>
                                    <span class="current-price">7.000 <span>TL</span></span>
                                </div>
                                <div class="actions">
                                    <a href="#" class="add-to-cart"></a>
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
                    <span class="slider-indicator"></span>
                </div>
                
                <div class="banner-section">
                    <a href="#" class="promo-banner">
                        <img src="/alodiyet/alodiyetresimler/banner.png" alt="Diyet Değil, Lezzetli Bir Yolculuk!">
                    </a>
                </div>
                <div class="extra-products-row" style="display: flex; gap: 22px; justify-content: center; margin: 32px 0 0 0;">
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
                    <a href="#" class="add-to-cart"></a>
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
                    <a href="#" class="add-to-cart"></a>
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
                    <a href="#" class="add-to-cart"></a>
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
                
            </div>
        </div>
    </section>

   

    <!-- AloDiyet Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <img src="/alodiyet/alodiyetresimler/nedenalodiyetpaket.png" alt="Neden AloDiyet Paketleri?" class="benefits-image">
        </div>
    </section>
    <section class="detox4-section">
        <h2 class="detox4-title">Detox Paketlerimiz ile Tanışın!</h2>
        <div class="detox4-cards">
            <div class="detox4-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                <img src="/alodiyet/alodiyetresimler/mix-detox.png" alt="Mix Detox Paketi" class="detox4-img">
                <div class="detox4-card-content">
                    <h3>Mix Detox Paketi</h3>
                    <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                    <button class="detox4-btn">İncele</button>
                </div>
            </div>
            <div class="detox4-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                <img src="/alodiyet/alodiyetresimler/mix-detox.png" alt="Mix Detox Paketi" class="detox4-img">
                <div class="detox4-card-content">
                    <h3>Mix Detox Paketi</h3>
                    <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                    <button class="detox4-btn">İncele</button>
                </div>
            </div>
            <div class="detox4-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                <img src="/alodiyet/alodiyetresimler/mix-detox.png" alt="Mix Detox Paketi" class="detox4-img">
                <div class="detox4-card-content">
                    <h3>Mix Detox Paketi</h3>
                    <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                    <button class="detox4-btn">İncele</button>
                </div>
            </div>
            <div class="detox4-card" onclick="window.location.href='/alodiyet/paketdetay/index.php';" style="cursor: pointer;">
                <img src="/alodiyet/alodiyetresimler/mix-detox.png" alt="Mix Detox Paketi" class="detox4-img">
                <div class="detox4-card-content">
                    <h3>Mix Detox Paketi</h3>
                    <p>30 Günlük Fast Plus Paketimiz, her hafta değişen beslenme rutininiz</p>
                    <button class="detox4-btn">İncele</button>
                </div>
            </div>
        </div>
        <!-- Slider indikatörleri - mobilde kaydırma noktaları -->
        <div class="slider-indicators">
            <span class="slider-indicator active"></span>
            <span class="slider-indicator"></span>
        </div>
    </section>

    <div class="whatsapp-float" style="display: flex; position: fixed; bottom: 20px; left: 20px; z-index: 1000; background: none; box-shadow: none;">
        <a href="https://wa.me/908502206685" style="display: flex; align-items: center; justify-content: center; text-decoration: none;">
            <img src="/alodiyet/alodiyetresimler/whatsapp.png" alt="WhatsApp" style="width: 35px; height: 35px;">
        </a>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script src="js/mobile-slider.js"></script>

    <script>
        // Sayfa yüklendikten sonra çalışacak test kodu
        document.addEventListener('DOMContentLoaded', function() {
            console.log("Sayfa yüklendi, menü testi yapılıyor");
            
            // Menü öğelerini kontrol et
            const menuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (menuToggle) {
                console.log("Menü düğmesi bulundu:", menuToggle);
                
                // Menü ikonunu görünür yap
                const menuIcon = menuToggle.querySelector('img');
                if (menuIcon) {
                    menuIcon.style.display = 'block';
                    menuIcon.style.visibility = 'visible';
                    menuIcon.style.opacity = '1';
                    console.log("Menü ikonu görünür yapıldı");
                } else {
                    console.log("HATA: Menü ikonu bulunamadı!");
                }
            } else {
                console.log("HATA: Menü düğmesi bulunamadı!");
            }
            
            if (mobileMenu) {
                console.log("Mobil menü bulundu:", mobileMenu);
                console.log("Menü stilleri:", {
                    display: window.getComputedStyle(mobileMenu).display,
                    position: window.getComputedStyle(mobileMenu).position,
                    top: window.getComputedStyle(mobileMenu).top,
                    zIndex: window.getComputedStyle(mobileMenu).zIndex
                });
            } else {
                console.log("HATA: Mobil menü bulunamadı!");
            }
            
            // Menü düğmesine manuel olay ekle
            if (menuToggle && mobileMenu) {
                console.log("Menü düğmesine manuel test olayı ekleniyor");
                
                // Bu menü düğmesine ekstra bir olay dinleyicisi ekliyor
                menuToggle.addEventListener('click', function() {
                    console.log("Manuel test: Menü düğmesine tıklandı");
                    
                    // CSS'i doğrudan değiştir
                    if (mobileMenu.style.display === 'flex') {
                        mobileMenu.style.display = 'none';
                        console.log("Manuel test: Menü kapatıldı");
                    } else {
                        mobileMenu.style.display = 'flex';
                        mobileMenu.style.position = 'fixed';
                        mobileMenu.style.top = '48px';
                        mobileMenu.style.left = '0';
                        mobileMenu.style.width = '100%';
                        mobileMenu.style.backgroundColor = '#fff';
                        mobileMenu.style.zIndex = '9999';
                        console.log("Manuel test: Menü açıldı");
                    }
                });
            }
        });
    </script>

    <?php include '../includes/footer.php'; ?> 

</body>
</html> 