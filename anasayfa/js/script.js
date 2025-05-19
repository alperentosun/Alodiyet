// Accordion işlevselliği
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM yüklendi, script başlatılıyor');
    
    // Accordion işlevselliği
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const header = item.querySelector('h3');
        
        if (header) {
            header.addEventListener('click', function() {
                // Aktif sınıfı ekle/çıkar
                item.classList.toggle('active');
                
                // Diğer tüm accordion öğelerini kapat
                accordionItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
            });
        }
    });

    // Mobil hamburger menü aç/kapa
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (menuToggle && mobileMenu) {
        console.log('Menü elementleri bulundu - hamburger menü hazır');
        
        // Menü düğmesine tıklama olayı ekleniyor
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Event yayılımını durdur
            console.log('Menü düğmesine tıklandı');
            
            // mobile-menu-open sınıfını toggle et
            mobileMenu.classList.toggle('mobile-menu-open');
            
            // Menü açık/kapalı durumuna göre konsola bilgi yazdır
            console.log(mobileMenu.classList.contains('mobile-menu-open') ? 'Menü açıldı' : 'Menü kapatıldı');
            
            // Menü ikonunun görünürlüğünü kontrol et
            const menuIcon = menuToggle.querySelector('img');
            if (menuIcon) {
                // İkon stillerini doğrudan ayarla
                menuIcon.style.display = 'block';
                menuIcon.style.visibility = 'visible';
                menuIcon.style.opacity = '1';
            } else {
                console.log('Menü ikonu bulunamadı!');
            }
        });
        
        // Menü dışına tıklanınca kapat
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target) && mobileMenu.classList.contains('mobile-menu-open')) {
                mobileMenu.classList.remove('mobile-menu-open');
                console.log('Menü dışına tıklandı, menü kapatıldı');
            }
        });
    } else {
        console.log('Menü elementleri bulunamadı:', 'menuToggle:', menuToggle, 'mobileMenu:', mobileMenu);
    }
    
    // Filtre gruplarının açılıp kapanması
    const filterGroups = document.querySelectorAll('.filter-group h3');
    
    filterGroups.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('i');
            
            if (content && content.classList.contains('filter-content')) {
                if (content.style.display === 'none' || !content.style.display) {
                    content.style.display = 'block';
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    content.style.display = 'none';
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            }
        });
    });
    
    // Hero slider işlevselliği
    const sliderDots = document.querySelectorAll('.dot');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    
    let currentSlide = 0;
    const totalSlides = sliderDots.length;
    
    // Noktalara tıklama
    sliderDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            changeSlide(index);
        });
    });
    
    // Önceki slide
    if (prevArrow) {
        prevArrow.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            changeSlide(currentSlide);
        });
    }
    
    // Sonraki slide
    if (nextArrow) {
        nextArrow.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % totalSlides;
            changeSlide(currentSlide);
        });
    }
    
    function changeSlide(slideIndex) {
        sliderDots.forEach((dot, index) => {
            if (index === slideIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
        
        // Burada gerçek slider içeriğini değiştirme kodu eklenecek
        currentSlide = slideIndex;
    }
    
    // Favorilere ekleme işlevi
    const wishlistButtons = document.querySelectorAll('.add-to-wishlist');
    
    wishlistButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const icon = this.querySelector('i');
            
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                this.style.color = '#ff4545';
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                this.style.color = '#ccc';
            }
        });
    });

    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', function() {
                // Eğer zaten aktifse kapat
                if (item.classList.contains('active')) {
                    item.classList.remove('active');
                    const icon = item.querySelector('.faq-icon');
                    if (icon) icon.innerHTML = '&#9660;';
                    return;
                }
                // Tümünü kapat
                faqItems.forEach(i => {
                    i.classList.remove('active');
                    const icon = i.querySelector('.faq-icon');
                    if (icon) icon.innerHTML = '&#9660;';
                });
                // Tıklananı aç
                item.classList.add('active');
                const icon = item.querySelector('.faq-icon');
                if (icon) icon.innerHTML = '&#9650;';
            });
        }
    });

    // Sayfa yüklendikten sonra menü ikonunu görünür yap
    const menuIcon = document.querySelector('#mobile-menu-toggle img');
    if (menuIcon) {
        menuIcon.style.display = 'block';
        menuIcon.style.visibility = 'visible';
        menuIcon.style.opacity = '1';
    }

    // Sayfa kaydırma işlemi
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
    });
}); 