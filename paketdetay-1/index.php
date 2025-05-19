<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Sağlıklı Beslenme</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Header spacing fix */
        .desktop-header .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .mobile-header {
            padding-left: 15px;
            padding-right: 15px;
        }
        
        @media (max-width: 600px) {
            .package-detail-flex {
                padding: 20px 15px;
            }
        }
    </style>
</head>


<?php include '../includes/header.php'; ?>


<section class="package-detail-mainv2">
    <div class="container">
        <div class="package-detail-flex">
            <div class="package-gallery">
                <div class="package-main-img">
                    <img src="/alodiyet/alodiyetresimler/OfisPaket.png" alt="Fast Plus Paket" id="mainProductImg">
                    <button class="fav-btn"><i class="far fa-heart"></i></button>
                </div>
                <div class="package-thumbnails">
                    <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="thumb1" class="thumb active" onclick="changeMainImg(this)">
                    <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="thumb2" class="thumb" onclick="changeMainImg(this)">
                    <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="thumb3" class="thumb" onclick="changeMainImg(this)">
                </div>
            </div>
            <div class="package-info-block">
                <h2 class="package-title">Fast Plus Paket</h2>
                <div class="package-pricing">
                    <span class="old-price">9.200 TL</span>
                    <span class="current-price">7.000 TL</span>
                </div>
                <div class="package-quantity-row">
                    <span>Adet</span> 
                    <div class="quantity-selector-row">
                        <div class="quantity-selector">
                            <button class="qty-btn" onclick="decreaseQty()">-</button>
                            <span id="qty-value">0</span>
                            <button class="qty-btn" onclick="increaseQty()">+</button>
                        </div>
                        <button class="buy-btn" onclick="window.location.href='/alodiyet/sepetim/index.php';"><img src="/alodiyet/alodiyetresimler/shopping-cart-plus.png"  class="buy-btn-icon"> Satın Al</button>
                    </div>
                </div>
                <div class="package-desc">
                    
                    <ul>
                    <li>21 Günlük Fit'N Detox Paketi, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                    <li>6-1 sistemini uyguladığımız bu programda;</li>
                        <li>İlk 6 günü katı & sıvı karma bir menüsü olan Reset Programı ile metabolizmanızı çalıştırmaya başlıyoruz.</li>
                        <li>1 günlük Mix Detoks Programı ile rutininizi değiştirip metabolizmanızı şaşırtıyoruz.</li>
                        <li>6-1 sirkülasyonunu 3 kez uyguluyor ve ideal kilonuza sağlıklı beslenme alışkanlığı kazanarak düşüyorsunuz.</li>
                    </ul>
                </div>
                <div class="package-info-box">
                    <ul>
                        <li>*İhtiyacınız olan kalori ve besin öğeleri diyetisyenlerimiz tarafından ayarlanacaktır.</li>
                        <li>*Kaplarımız gıdaya ve mikrodalgaya uyumludur.</li>
                        <li>*Markamız ISO 9001, 22000 VE 10002 Sertifikalarına sahip olup "2022 Yılının Önerilen Markası" seçilmiştir.</li>
                        <li>*Paket fiyatlarına bölgesel teslimat ücreti yansıtılabilir.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="package-tabs-section">
    <div class="package-tabs">
        <button class="tab-btn active" data-tab="menu">Örnek Menü</button>
        <button class="tab-btn" data-tab="aciklama">Paket Açıklaması</button>
        <button class="tab-btn" data-tab="taksit">Taksit Seçenekleri</button>
        <button class="tab-btn" data-tab="yorum">Yorumlar</button>
    </div>
    <div class="tab-contents">
        <div class="tab-content active" id="tab-menu">
            <div class="menu-table">
                <div class="menu-col">
                    <b>Kahvaltı</b><br>
                    Lorlu Peynirli<br>
                    Izgara Zeytin<br>
                    Salatası, Tam Buğday Ekmek
                </div>
                <div class="menu-col">
                    <b>Ara 1</b><br>
                    Blush Tea (250 Ml)
                </div>
                <div class="menu-col">
                    <b>Kahvaltı</b><br>
                    Marinana Soslu Köfte<br>
                    Bezelyeli Kinoa Pilavı<br>
                    Mor Lahana Salatası
                </div>
                <div class="menu-col">
                    <b>Ara 2</b><br>
                    Yulaflı Cookie
                </div>
                <div class="menu-col">
                    <b>Akşam</b><br>
                    Sweetred (500 ml)
                </div>
            </div>
            
        </div>
        <div class="tab-content" id="tab-aciklama">
            <div class="tab-inner">
            <div class="package-desc">
                    
                    <ul>
                    <li>21 Günlük Fit'N Detox Paketi, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                    <li>6-1 sistemini uyguladığımız bu programda;</li>
                        <li>İlk 6 günü katı & sıvı karma bir menüsü olan Reset Programı ile metabolizmanızı çalıştırmaya başlıyoruz.</li>
                        <li>1 günlük Mix Detoks Programı ile rutininizi değiştirip metabolizmanızı şaşırtıyoruz.</li>
                        <li>6-1 sirkülasyonunu 3 kez uyguluyor ve ideal kilonuza sağlıklı beslenme alışkanlığı kazanarak düşüyorsunuz.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="tab-taksit">
            <div class="tab-inner">
                <div class="payment-options">
                    <div class="payment-row">
                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/advantage.png" alt="Advantage" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>

                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/axess.png" alt="Axess" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>

                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/cardfinans.png" alt="CardFinans" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>

                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/combo.png" alt="Bankkart" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="payment-row">
                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/maximum.png" alt="Maximum" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>

                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/paraf.png" alt="Paraf" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>

                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/saglamkart.png" alt="Sağlam Kart" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>

                        <div class="payment-col">
                            <img src="/alodiyet/alodiyetresimler/world.png" alt="World" class="bank-logo">
                            <div class="payment-info">
                                <div class="payment-header">
                                    <span>Taksit Tutarı</span>
                                    <span>Toplam Tutar</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                                <div class="payment-item">
                                    <span>3 x 5.104,09 TL</span>
                                    <span>3 x 5.104,09 TL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="tab-aciklama">
            <div class="tab-inner">
            <div class="package-desc">
                    
                    <ul>
                    <li>21 Günlük Fit'N Detox Paketi, her hafta değişen beslenme rutininiz ile sıkılmadan keyifle kilo vermenize yardımcı olacak.</p>
                    <li>6-1 sistemini uyguladığımız bu programda;</li>
                        <li>İlk 6 günü katı & sıvı karma bir menüsü olan Reset Programı ile metabolizmanızı çalıştırmaya başlıyoruz.</li>
                        <li>1 günlük Mix Detoks Programı ile rutininizi değiştirip metabolizmanızı şaşırtıyoruz.</li>
                        <li>6-1 sirkülasyonunu 3 kez uyguluyor ve ideal kilonuza sağlıklı beslenme alışkanlığı kazanarak düşüyorsunuz.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="tab-taksit">
            <div class="tab-inner">Taksit seçenekleri buraya gelecek.</div>
        </div>
        <div class="tab-content" id="tab-yorum">
            <div class="tab-inner">Yorumlar buraya gelecek.</div>
        </div>
        
    </div>
    <div class="menu-info">
                *7. gün, 14. gün ve 21. gün Full Sıvı Detoks Günüdür.<br>
                *Menülerimiz her hafta değişmektedir.<br>
                *Kullanılan meyve ve sebzeler mevsim şartlarına göre değişiklik gösterebilir.
            </div>
</section>

<section class="macro-bars-section">
    <div class="macro-portion">1 porsiyon</div>
    <div class="macro-row">
        <div class="macro-label">Protein</div>
        <div class="macro-bar-wrap">
            <div class="macro-bar-bg"></div>
            <div class="macro-bar macro-bar-protein" style="width: 60%"><span class="macro-value">9.7</span></div>
            <div class="macro-unit">gram</div>
        </div>
    </div>
    <div class="macro-row">
        <div class="macro-label">Karbonhidrat</div>
        <div class="macro-bar-wrap">
            <div class="macro-bar-bg"></div>
            <div class="macro-bar macro-bar-carb" style="width: 36%"><span class="macro-value">4.3</span></div>
            <div class="macro-unit">gram</div>
        </div>
    </div>
    <div class="macro-row">
        <div class="macro-label">Yağ</div>
        <div class="macro-bar-wrap">
            <div class="macro-bar-bg"></div>
            <div class="macro-bar macro-bar-fat" style="width: 12%"><span class="macro-value">1.2</span></div>
            <div class="macro-unit">gram</div>
        </div>
    </div>
    <div class="macro-limit-line"></div>
    <div class="macro-total">
        <span>Toplam</span>
        <span class="macro-total-value">104.6 Kalori</span>
    </div>
</section>

<section class="product-cards-section">
    <h3 class="product-cards-title">Sizin İçin En İyisini Keşfedin!</h3>
    <div class="product-cards-grid">
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




<script>
function changeMainImg(el) {
    document.getElementById('mainProductImg').src = el.src;
    document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
    el.classList.add('active');
}
let qty = 0;
function increaseQty() {
    qty++;
    document.getElementById('qty-value').innerText = qty;
}
function decreaseQty() {
    if(qty > 0) qty--;
    document.getElementById('qty-value').innerText = qty;
}

// Tab geçişi
const tabBtns = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');
tabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
        tabBtns.forEach(b => b.classList.remove('active'));
        tabContents.forEach(tc => tc.classList.remove('active'));
        this.classList.add('active');
        document.getElementById('tab-' + this.dataset.tab).classList.add('active');
    });
});
</script>
<?php include '../includes/footer.php'; ?> 