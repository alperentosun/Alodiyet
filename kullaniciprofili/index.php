<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Sağlıklı Beslenme</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/kullaniciprofili/css/style.css">
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
        
        /* Profil içeriği için ek stiller */
        .profile-content {
            padding: 0;
            overflow: hidden;
        }
        
        .calendar-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .calendar-header h3 {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }
        
        .calendar-nav {
            display: flex;
            gap: 15px;
        }
        
        .calendar-nav button {
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            font-size: 18px;
        }
        
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 8px;
        }
        
        .day-name {
            text-align: center;
            font-size: 12px;
            font-weight: 500;
            color: #888;
            padding: 5px 0;
        }
        
        .day-cell {
            border-radius: 10px;
            padding: 10px 5px;
            transition: all 0.2s ease;
        }
        
        .day-cell.active {
            background-color: #FFE9D6;
        }
        
        .day-date {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }
        
        .day-slots {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .time-slot {
            font-size: 12px;
            color: #666;
            text-align: center;
            padding: 5px 0;
        }
        
        .time-slot.selected {
            background-color: #FFFFFF;
            border-radius: 20px;
            padding: 5px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
            color: #333;
            font-weight: 500;
        }
        
        .time-slot.empty {
            color: #ccc;
        }
        
        .day-cell.other-month {
            opacity: 0.5;
        }
        
        .day-cell.today .day-date {
            color: #f18518;
            font-weight: 700;
        }
        
        .time-slot {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .time-slot:not(.empty):hover {
            background-color: rgba(255, 233, 214, 0.5);
            border-radius: 20px;
        }
        
        .stats-section {
            display: flex;
            padding: 20px;
            gap: 20px;
            background-color: #fff;
        }
        
        .stats-card {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            position: relative;
        }
        
        .stats-value {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin: 0;
        }
        
        .stats-label {
            font-size: 14px;
            color: #888;
            margin-top: 5px;
        }
        
        .stats-chart {
            width: 100%;
            height: 70px;
            margin-top: 15px;
            position: relative;
        }
        
        .stats-chart img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .weight-loss {
            text-align: left;
            padding: 20px;
            background: linear-gradient(to right, #e8f9eb, #f0ffed);
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }
        
        .weight-loss-value {
            display: inline-block;
            background-color: #00b050;
            color: white;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 20px;
            margin-top: 10px;
            font-size: 14px;
        }
        
        .weight-loss-image {
            position: absolute;
            right: 20px;
            bottom: 0;
            height: 130px;
            max-width: 55%;
            object-fit: contain;
        }
        
        .calorie-card {
            background-color: #FFF6EC;
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .calorie-info {
            flex: 1;
        }
        
        .calorie-date {
            font-size: 13px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .calorie-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        
        .calorie-value {
            display: inline-block;
            background-color: #f18518;
            color: white;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
        }
        
        .calorie-image {
            height: 110px;
            object-fit: contain;
        }
        
        .order-card {
            margin: 0 0 20px 0;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 20px;
        }
        
        .order-info {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .order-left {
            display: flex;
            flex-direction: column;
        }
        
        .order-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        
        .order-date {
            font-size: 13px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .order-title {
            font-size: 16px;
            font-weight: 600;
            color: #f18518;
            margin-bottom: 5px;
            text-align: right;
        }
        
        .order-value {
            font-size: 26px;
            font-weight: 700;
            color: #333;
            text-align: right;
        }
        
        .order-btn {
            display: inline-block;
            background: linear-gradient(to bottom, #f8a649, #f18518);
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            align-self: flex-start;
            transition: all 0.3s ease;
        }
        
        .order-btn:hover {
            background: linear-gradient(to bottom, #f18518, #e67300);
        }
        
        .activity-section {
            padding: 20px;
        }
        
        .activity-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .activity-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .activity-info {
            color: #888;
            font-size: 18px;
        }
        
        .activity-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .time-separator {
            position: relative;
            padding-top: 15px;
            padding-bottom: 15px;
            color: #888;
            font-size: 14px;
            border-top: 1px dashed #ddd;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-bottom: 15px;
        }
        
        .activity-image {
            width: 40px;
            height: 40px;
            border-radius: 5px;
            overflow: hidden;
            background-color: #f5f5f5;
        }
        
        .activity-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .activity-details {
            flex: 1;
        }
        
        .activity-name {
            font-size: 15px;
            font-weight: 500;
            color: #333;
            margin-bottom: 4px;
        }
        
        .activity-time {
            font-size: 12px;
            color: #888;
        }
        
        .activity-actions {
            font-size: 18px;
            color: #888;
        }
        
        .meal-group {
            margin-left: 55px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .meal-item {
            font-size: 14px;
            color: #555;
            padding: 5px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .add-activity-btn {
            display: block;
            width: auto;
            padding: 10px 20px;
            border: none;
            background-color: #00b050;
            color: white;
            font-size: 14px;
            font-weight: 500;
            border-radius: 30px;
            cursor: pointer;
            margin: 30px 0 10px auto;
            transition: background-color 0.2s;
            box-shadow: 0 4px 10px rgba(0, 176, 80, 0.25);
        }
        
        .add-activity-btn:hover {
            background-color: #009a45;
        }
        
        @media (max-width: 768px) {
            .stats-section {
                flex-direction: column;
            }
            
            .calorie-card {
                flex-direction: row;
                text-align: left;
                align-items: center;
            }
            
            .calorie-image {
                margin-top: 0;
                height: 70px;
            }
            
            .order-card {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .order-btn {
                margin-left: 0;
                margin-top: 10px;
                font-size: 11px;
                padding: 5px 12px;
                max-width: 100px;
                margin-inline: auto;
            }
        }
        
        /* Yeni iki sütunlu yapı için stil eklemeleri */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        
        .col-lg-8, .col-md-8, .col-lg-4, .col-md-4, .col-sm-12 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media (min-width: 576px) {
            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        
        @media (min-width: 768px) {
            .col-md-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }
        
        @media (min-width: 992px) {
            .col-lg-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-lg-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }
        
        /* Sağ sütun kartları için stiller */
        .sidebar-stats {
            margin-bottom: 20px;
        }
        
        .stats-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .stats-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .stats-title {
            font-size: 14px;
            color: #888;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .stats-link {
            font-size: 12px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            background-color: #00b050;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.2s;
        }
        
        .stats-link:hover {
            background-color: #009a45;
        }
        
        .stats-value {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }
        
        .stats-chart {
            width: 100%;
            height: 70px;
        }
        
        .stats-chart img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .weight-loss, .calorie-card, .order-card {
            margin: 0 0 20px 0;
        }
        
        @media (max-width: 767px) {
            .sidebar-stats {
                margin-top: 20px;
            }
        }
    </style>
</head>

<?php include '../includes/header.php'; ?>


<div class="user-nav-container">
    <div class="user-nav-buttons">
        <a href="/alodiyet/siparislerim/" class="user-nav-btn"><i class="fas fa-shopping-basket" style="color: #f18518 !important; margin-right: 12px;"></i> Siparişlerim</a>
        <a href="#" class="user-nav-btn"><i class="far fa-heart" style="color: #f18518 !important; margin-right: 12px;"></i> Favorilerim</a>
        <a href="/alodiyet/kullaniciprofili/" class="user-nav-btn active"><i class="fas fa-user-cog" style="color: #f18518 !important; margin-right: 12px;"></i> Profil Ayarları</a>
    </div>
    <div class="user-profile-info">
        <span class="user-name">İlter Türkmen</span>
        <span class="user-email">ilterturkmen@gmail.com</span>
        <img src="/alodiyet/alodiyetresimler/kullaniciresim.png" alt="Profil" class="user-profile-img">
    </div>
</div>

<section class="orders-mainv2">
    <div class="container">
        <div class="profile-content">
            <div class="row">
                <!-- Sol Sütun (Aktiviteler) col-8 -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <!-- Takvim Bölümü -->
                    <div class="calendar-section">
                        <div class="calendar-header">
                            <h3>Nisan 2024</h3>
                            <div class="calendar-nav">
                                <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                                <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                        
                        <div class="calendar-days">
                            <div class="day-name">Pzt</div>
                            <div class="day-name">Sal</div>
                            <div class="day-name">Çar</div>
                            <div class="day-name">Per</div>
                            <div class="day-name">Cum</div>
                            <div class="day-name">Cmt</div>
                            <div class="day-name">Pz</div>
                            
                            <div class="day-cell">
                                <div class="day-date">25</div>
                                <div class="day-slots">
                                    <div class="time-slot">10:00</div>
                                    <div class="time-slot">11:00</div>
                                    <div class="time-slot">12:00</div>
                                </div>
                            </div>
                            
                            <div class="day-cell active">
                                <div class="day-date">26</div>
                                <div class="day-slots">
                                    <div class="time-slot">08:00</div>
                                    <div class="time-slot selected">09:00</div>
                                    <div class="time-slot">10:00</div>
                                </div>
                            </div>
                            
                            <div class="day-cell">
                                <div class="day-date">27</div>
                                <div class="day-slots">
                                    <div class="time-slot">12:00</div>
                                    <div class="time-slot empty">—</div>
                                    <div class="time-slot">13:00</div>
                                </div>
                            </div>
                            
                            <div class="day-cell">
                                <div class="day-date">28</div>
                                <div class="day-slots">
                                    <div class="time-slot">10:00</div>
                                    <div class="time-slot">11:00</div>
                                    <div class="time-slot empty">—</div>
                                </div>
                            </div>
                            
                            <div class="day-cell">
                                <div class="day-date">29</div>
                                <div class="day-slots">
                                    <div class="time-slot empty">—</div>
                                    <div class="time-slot">14:00</div>
                                    <div class="time-slot">16:00</div>
                                </div>
                            </div>
                            
                            <div class="day-cell">
                                <div class="day-date">30</div>
                                <div class="day-slots">
                                    <div class="time-slot">12:00</div>
                                    <div class="time-slot">14:00</div>
                                    <div class="time-slot">15:00</div>
                                </div>
                            </div>
                            
                            <div class="day-cell">
                                <div class="day-date">31</div>
                                <div class="day-slots">
                                    <div class="time-slot">09:00</div>
                                    <div class="time-slot">10:00</div>
                                    <div class="time-slot">11:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Aktiviteler Bölümü -->
                    <div class="activity-section">
                        <div class="activity-header">
                            <h3 class="activity-title">Aktiviteleriniz <i class="far fa-question-circle activity-info"></i></h3>
                        </div>
                        
                        <div class="activity-list">
                            <!-- Aktivite: 09:00 -->
                            <div class="time-separator">09:00</div>
                            <div class="activity-item">
                                <div class="activity-image">
                                    <img src="/alodiyet/alodiyetresimler/Süper-Güçlü-Detox.png" alt="Detox">
                                </div>
                                <div class="activity-details">
                                    <div class="activity-name">Positive Detox (500 ml)</div>
                                    <div class="activity-time">09:00 - 09:30</div>
                                </div>
                                <div class="activity-actions">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </div>
                            
                            <!-- Aktivite: 10:00 -->
                            <div class="time-separator">10:00</div>
                            <div class="activity-item">
                                <div class="activity-image">
                                    <img src="/alodiyet/alodiyetresimler/Day-By-Day-Detox-Paket.png" alt="Cookie">
                                </div>
                                <div class="activity-details">
                                    <div class="activity-name">Yulaflı Cookie</div>
                                    <div class="activity-time">10:00 - </div>
                                </div>
                                <div class="activity-actions">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </div>
                            
                            <!-- Aktivite: 12:00 -->
                            <div class="time-separator">12:00</div>
                            <div class="activity-item">
                                <div class="activity-image">
                                    <img src="/alodiyet/alodiyetresimler/urunresim1.png" alt="Köfte">
                                </div>
                                <div class="activity-details">
                                    <div class="activity-name">Marinana Soslu Köfte</div>
                                    <div class="activity-time">12:00-12:15</div>
                                </div>
                                <div class="activity-actions">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </div>
                            
                            <!-- Alt Yemekler -->
                            <div class="meal-group">
                                <div class="meal-item">Bezelyeli Kinoa Pilavı</div>
                                <div class="meal-item">Mor Lahana Salatası</div>
                            </div>
                        </div>
                        
                        <div style="text-align: right;">
                            <button class="add-activity-btn">Aktivite Ekle</button>
                        </div>
                    </div>
                </div>
                
                <!-- Sağ Sütun (Kilo/Kalori Bilgileri) col-4 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="sidebar-stats">
                        <!-- İstatistikler Bölümü -->
                        <div class="stats-card">
                            <div class="stats-header">
                                <div class="stats-title">Kilom <i class="far fa-question-circle"></i></div>
                                <a href="#" class="stats-link">Veri Giriniz</a>
                            </div>
                            <div class="stats-value">54 kg</div>
                            <div class="stats-chart">
                                <img src="/alodiyet/alodiyetresimler/LineChart.png" alt="Kilo Grafiği">
                            </div>
                        </div>
                        
                        <!-- Kilo Verme Durumu -->
                        <div class="weight-loss">
                            <h3>Son 1 Aylık Durum</h3>
                            <div>Kilo Verme</div>
                            <div class="weight-loss-value">-12.05 kg</div>
                            <img src="/alodiyet/alodiyetresimler/kalori.png" alt="Kilo Verme" class="weight-loss-image">
                        </div>
                        
                        <!-- Kalori Kartı -->
                        <div class="calorie-card">
                            <div class="calorie-info">
                                <div class="calorie-title">Toplam Kalori Miktarı</div>
                                <div class="calorie-date">21.04.2025</div>
                                
                                <div class="calorie-value">1500 cal</div>
                            </div>
                            <img src="/alodiyet/alodiyetresimler/kiloverme.png" alt="Kalori" class="calorie-image">
                        </div>
                        
                        <!-- Son Sipariş -->
                        <div class="order-card">
                            <div class="order-info">
                                <div class="order-left">
                                    <div class="order-date">Son Siparişim</div>
                                    <div class="order-date">21.04.2025</div>
                                </div>
                                <div class="order-right">
                                    <div class="order-title">Fast Paket</div>
                                    <div class="order-value">7.000 TL</div>
                                </div>
                            </div>
                            <a href="#" class="order-btn">Tekrarla</a>
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
            // Mobil değilse göstergeleri gizle
            const indicators = document.querySelectorAll('.slider-indicators');
            indicators.forEach(function(indicator) {
                indicator.style.display = 'none';
            });
            
            return;
        }
    }
    
    // İlk yükleme ve pencere yeniden boyutlandırıldığında
    initMobileSliders();
    window.addEventListener('resize', initMobileSliders);

    // Takvim işlevselliği
    const calendarHeader = document.querySelector('.calendar-header h3');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const calendarDaysContainer = document.querySelector('.calendar-days');
    
    // Ay isimleri
    const monthNames = [
        'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran',
        'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'
    ];
    
    // Gün isimleri
    const dayNames = ['Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt', 'Pz'];
    
    // Mevcut tarih bilgisi
    let currentDate = new Date();
    let currentWeekStart = getMonday(currentDate);
    
    // Seçilen tarih ve zaman
    let selectedDate = null;
    let selectedTimeSlot = null;
    
    // Pazartesi gününü bulma yardımcı fonksiyonu
    function getMonday(date) {
        const d = new Date(date);
        const day = d.getDay();
        const diff = d.getDate() - day + (day === 0 ? -6 : 1); // Pazartesi için ayarlama
        return new Date(d.setDate(diff));
    }
    
    // Haftayı oluşturma fonksiyonu
    function generateWeek(startDate) {
        // Başlangıç tarihinden ay ve yılı al
        const month = startDate.getMonth();
        const year = startDate.getFullYear();
        
        // Ay başlığını güncelle
        calendarHeader.textContent = `${monthNames[month]} ${year}`;
        
        // Takvim günlerini temizle (gün isimleri hariç)
        const dayElements = calendarDaysContainer.querySelectorAll(':scope > *');
        for (let i = 7; i < dayElements.length; i++) {
            calendarDaysContainer.removeChild(dayElements[i]);
        }
        
        // Haftayı oluştur
        for (let i = 0; i < 7; i++) {
            const currentDay = new Date(startDate);
            currentDay.setDate(startDate.getDate() + i);
            
            const day = currentDay.getDate();
            const month = currentDay.getMonth();
            const year = currentDay.getFullYear();
            
            // Farklı ayda olup olmadığını kontrol et
            const isOtherMonth = month !== startDate.getMonth();
            
            const dayCell = createDayCell(day, month, year, isOtherMonth);
            calendarDaysContainer.appendChild(dayCell);
        }
    }
    
    // Gün hücresi oluşturma fonksiyonu
    function createDayCell(day, month, year, isOtherMonth) {
        const dayCell = document.createElement('div');
        dayCell.className = 'day-cell';
        
        if (isOtherMonth) {
            dayCell.classList.add('other-month');
        }
        
        // Bugünün tarihini vurgula
        const today = new Date();
        if (day === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
            dayCell.classList.add('today');
        }
        
        const dateObj = new Date(year, month, day);
        const dateStr = `${year}-${month + 1}-${day}`;
        dayCell.dataset.date = dateStr;
        
        // Tarih kısmını ekle
        const dateDiv = document.createElement('div');
        dateDiv.className = 'day-date';
        dateDiv.textContent = day;
        dayCell.appendChild(dateDiv);
        
        // Zaman slotları
        const slotsDiv = document.createElement('div');
        slotsDiv.className = 'day-slots';
        
        // Her gün için zaman slotu oluştur
        const timeSlots = generateTimeSlots(dateObj);
        
        timeSlots.forEach(time => {
            const timeSlot = document.createElement('div');
            timeSlot.className = 'time-slot';
            
            if (time === '—') {
                timeSlot.classList.add('empty');
                timeSlot.textContent = '—';
            } else {
                timeSlot.textContent = time;
                timeSlot.dataset.time = time;
                
                // Zaman slotu seçme olayı
                timeSlot.addEventListener('click', function() {
                    // Tüm seçimleri kaldır
                    document.querySelectorAll('.time-slot.selected').forEach(slot => {
                        slot.classList.remove('selected');
                    });
                    document.querySelectorAll('.day-cell.active').forEach(cell => {
                        cell.classList.remove('active');
                    });
                    
                    // Seçilen günü ve zaman slotunu işaretle
                    timeSlot.classList.add('selected');
                    dayCell.classList.add('active');
                    
                    // Seçilen gün ve zaman bilgisini kaydet
                    selectedDate = dateStr;
                    selectedTimeSlot = time;
                });
            }
            
            slotsDiv.appendChild(timeSlot);
        });
        
        dayCell.appendChild(slotsDiv);
        
        return dayCell;
    }
    
    // Zaman slotları oluşturma
    function generateTimeSlots(date) {
        // Demo amaçlı sabit slotlar
        const slots = [
            ['08:00', '09:00', '10:00'],
            ['09:00', '11:00', '12:00'],
            ['12:00', '—', '13:00'],
            ['10:00', '11:00', '—'],
            ['—', '14:00', '16:00'],
            ['12:00', '14:00', '15:00'],
            ['09:00', '10:00', '11:00']
        ];
        
        // Gün bazında farklı zaman slotları oluştur
        const day = date.getDay();
        return slots[day === 0 ? 6 : day - 1];
    }
    
    // Önceki ve sonraki haftaya geçme
    prevBtn.addEventListener('click', function() {
        const newStart = new Date(currentWeekStart);
        newStart.setDate(currentWeekStart.getDate() - 7);
        currentWeekStart = newStart;
        generateWeek(currentWeekStart);
    });
    
    nextBtn.addEventListener('click', function() {
        const newStart = new Date(currentWeekStart);
        newStart.setDate(currentWeekStart.getDate() + 7);
        currentWeekStart = newStart;
        generateWeek(currentWeekStart);
    });
    
    // Sayfa yüklendiğinde haftayı oluştur
    generateWeek(currentWeekStart);
    
    // Aktivite Ekle butonu için olay dinleyici
    const addActivityBtn = document.querySelector('.add-activity-btn');
    if (addActivityBtn) {
        addActivityBtn.addEventListener('click', function() {
            if (selectedDate && selectedTimeSlot) {
                alert(`Seçilen tarih: ${selectedDate}, Saat: ${selectedTimeSlot} için aktivite eklenecek`);
                // Burada aktivite ekleme formu veya işlemi yapılabilir
            } else {
                alert('Önce bir gün ve zaman seçmelisiniz');
            }
        });
    }
});
</script>

<?php include '../includes/footer.php'; ?> 