<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AloDiyet - Profil Ayarlar</title>
    <link rel="stylesheet" href="/alodiyet/anasayfa/css/style.css">
    <link rel="stylesheet" href="/alodiyet/profilayarlar/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<?php include '../includes/header.php'; ?>
<div class="user-nav-container">
    <div class="user-nav-buttons">
        <a href="/alodiyet/siparislerim/" class="user-nav-btn "><i class="fas fa-shopping-basket" style="color: #f18518 !important; margin-right: 12px;"></i> Siparişlerim</a>
        <a href="#" class="user-nav-btn"><i class="far fa-heart" style="color: #f18518 !important; margin-right: 12px;"></i> Favorilerim</a>
        <a href="/alodiyet/kullaniciprofili/" class="user-nav-btn active"><i class="fas fa-user-cog" style="color: #f18518 !important; margin-right: 12px;"></i> Profil Ayarları</a>
    </div>
    <div class="user-profile-info">
        <span class="user-name">İlter Türkmen</span>
        <span class="user-email">ilterturkmen@gmail.com</span>
        <img src="/alodiyet/alodiyetresimler/kullaniciresim.png" alt="Profil" class="user-profile-img">
    </div>
</div>

<div class="profile-settings-container">
    <!-- Kullanıcı Bilgilerim Bölümü -->
    <h2 class="section-title">Kullanıcı Bilgilerim</h2>
    
    <div class="profile-settings-row">
        <!-- Üyelik Bilgilerim -->
        <div class="profile-settings-card">
            <div class="card-header">
                <h3 class="card-title">Üyelik Bilgilerim</h3>
                <span class="add-image-btn">Resim Ekle <img src="/alodiyet/alodiyetresimler/resimekle.png" alt="Resim Ekle"></span>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group">
                        <label>Ad</label>
                        <input type="text" value="İlter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Soyad</label>
                        <input type="text" value="Türkmen" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="email" value="ilterturkmen@gmail.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Cep Telefonu</label>
                        <input type="text" value="+90 555 555 55 55" class="form-control">
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="alisverisCheckbox" class="form-check-input">
                    <label for="alisverisCheckbox" class="form-check-label">Alışverişlerim için fırsatlardan haberdar olmak istiyorum.</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="kvkkCheckbox" class="form-check-input">
                    <label for="kvkkCheckbox" class="form-check-label">Aydınlatma Metni'ni okudum ve Açık Rıza Metni'ni okudum, anladım ve e-posta abone@dijitayuvasi.yaparakaçık rızamı verdiğimi beyan ederim.</label>
                </div>
                <div class="form-actions">
                    <button class="btn-guncelle">Güncelle</button>
                </div>
            </div>
        </div>
        
        <!-- Şifre Güncelleme -->
        <div class="profile-settings-card">
            <div class="card-header">
                <h3 class="card-title">Şifre Güncelleme</h3>
            </div>
            <div class="card-body">
                <div class="form-group password-group">
                    <label>Şu Anki Şifre</label>
                    <div class="password-input-container">
                        <input type="password" class="form-control">
                        <button type="button" class="password-toggle"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
                <div class="form-group password-group">
                    <label>Yeni Şifre</label>
                    <div class="password-input-container">
                        <input type="password" class="form-control">
                        <button type="button" class="password-toggle"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
                <div class="form-group password-group">
                    <label>Yeni Şifre Tekrar</label>
                    <div class="password-input-container">
                        <input type="password" class="form-control">
                        <button type="button" class="password-toggle"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
                <div class="form-actions">
                    <button class="btn-guncelle">Güncelle</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Adres Bilgilerim Bölümü -->
    <div class="adres-section">
        <div class="section-header">
            <h2 class="section-title">Adres Bilgilerim</h2>
            <a href="#" class="add-address-link">+ Adres Ekle</a>
        </div>
        
        <div class="profile-settings-row">
            <!-- Ev Adresi -->
            <div class="profile-settings-card">
                <div class="card-header">
                    <h3 class="card-title">Ev</h3>
                </div>
                <div class="card-body">
                    <div class="form-group full-width">
                        <textarea class="form-control address-textarea">Büyükdere mah Akçağlar sk no 2/1A Odunpazarı Eskişehir</textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="kvkkCheckboxEv" class="form-check-input">
                        <label for="kvkkCheckboxEv" class="form-check-label">Aydınlatma Metni'ni okudum ve Açık Rıza Metni'ni okudum, anladım ve e-posta abone@dijitayuvasi.yaparakaçık rızamı verdiğimi beyan ederim.</label>
                    </div>
                    <div class="form-actions">
                        <button class="btn-guncelle">Güncelle</button>
                    </div>
                </div>
            </div>
            
            <!-- İş Yeri Adresi -->
            <div class="profile-settings-card">
                <div class="card-header">
                    <h3 class="card-title">İş Yeri</h3>
                </div>
                <div class="card-body">
                    <div class="form-group full-width">
                        <textarea class="form-control address-textarea">Büyükdere mah Akçağlar sk no 2/1A Odunpazarı Eskişehir</textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="kvkkCheckboxIs" class="form-check-input">
                        <label for="kvkkCheckboxIs" class="form-check-label">Aydınlatma Metni'ni okudum ve Açık Rıza Metni'ni okudum, anladım ve e-posta abone@dijitayuvasi.yaparakaçık rızamı verdiğimi beyan ederim.</label>
                    </div>
                    <div class="form-actions">
                        <button class="btn-guncelle">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
// Temel JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Şifre göster/gizle işlevi
    const passwordToggles = document.querySelectorAll('.password-toggle');
    
    passwordToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const passwordInput = this.parentElement.querySelector('input');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
});
</script> 