<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Sağlıklı Beslenme</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/paketlerimiz/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<?php include '../includes/header.php'; ?>

<div class="banner-section">
    <a href="#" class="promo-banner">
        <img src="/alodiyet/alodiyetresimler/banner2.png" alt="Diyet Değil, Lezzetli Bir Yolculuk!">
    </a>
</div>

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
                                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
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
                                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
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
                                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
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
                                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
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
                                    <a href="/alodiyet/sepetim/index.php" class="add-to-cart"></a>
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
            </div>
                
            </div>
        </div>
    </section>
    
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