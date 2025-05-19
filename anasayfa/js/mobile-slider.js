document.addEventListener('DOMContentLoaded', function() {
    // Mobil cihaz kontrolü 
    function isMobile() {
        return window.innerWidth <= 600;
    }
    
    function initMobileSliders() {
        if (!isMobile()) return;
        
        // Ana ürün satırı ve detox4-cards
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
            
            // Banner altındaki kartlar için özel stiller
            if (slider.previousElementSibling && slider.previousElementSibling.classList.contains('banner-section')) {
                slider.style.width = '100%';
                slider.style.maxWidth = '100vw';
                slider.style.overflowX = 'auto';
                slider.style.scrollSnapType = 'x mandatory';
            }
            
            // Orijinal kartları bir değişkende saklayalım
            const originalCards = slider.querySelectorAll(cardClassName);
            
            // Sonsuz kaydırma için klon kartları oluştur
            originalCards.forEach(card => {
                const clone = card.cloneNode(true);
                clone.classList.add(cardClassName.substring(1) + '-clone');
                slider.appendChild(clone);
            });
            
            // Tüm kartlar (orijinal + klonlar) için stil
            const allCardSelector = cardClassName + ', ' + cardClassName + '-clone';
            const allCards = slider.querySelectorAll(allCardSelector);
            allCards.forEach(card => {
                card.style.minWidth = '48%';
                card.style.maxWidth = '48%';
                card.style.flex = '0 0 48%';
                card.style.flexShrink = '0';
                card.style.scrollSnapAlign = 'start';
                card.style.marginRight = '0';
                card.style.boxSizing = 'border-box';
                card.style.marginBottom = '0'; // Alt boşluğu kaldır
                
                // Banner sonrası kartlar için ek stiller
                if (slider.previousElementSibling && slider.previousElementSibling.classList.contains('banner-section')) {
                    card.style.minWidth = '48%';
                    card.style.maxWidth = '48%';
                    card.style.flex = '0 0 48%';
                }
            });
            
            // Slider scroll çubuğunu gizle
            slider.style.scrollbarWidth = 'none';
            slider.style.msOverflowStyle = 'none';
            
            // Webkit için scroll çubuğu gizleme
            const style = document.createElement('style');
            style.textContent = `.products-row::-webkit-scrollbar, .extra-products-row::-webkit-scrollbar, .detox4-cards::-webkit-scrollbar { display: none; }`;
            document.head.appendChild(style);
            
            // Yatay kaydırma olay dinleyicileri
            let startX, moveX;
            
            // İlgili slider-indicators elementini bul
            const indicators = slider.classList.contains('detox4-cards') 
                ? slider.nextElementSibling
                : slider.nextElementSibling && slider.nextElementSibling.classList.contains('slider-indicators') 
                    ? slider.nextElementSibling 
                    : null;
                
            const indicatorDots = indicators && indicators.classList.contains('slider-indicators') 
                ? indicators.querySelectorAll('.slider-indicator') 
                : null;
            
            // Sonsuz kaydırma kontrolü
            function checkInfiniteScroll() {
                const scrollPosition = slider.scrollLeft;
                const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
                
                // Sağa doğru son noktaya ulaşıldığında
                if (scrollPosition >= maxScrollLeft - 10) {
                    // Slider'ı ortaya kaydır (orijinal ürünlerin ortasına)
                    slider.scrollTo({
                        left: 10,
                        behavior: 'auto' // Ani geçiş için
                    });
                }
                
                // Sola doğru başa geldiğinde
                if (scrollPosition <= 10) {
                    // Klonlanmış öğelerin başına kaydır
                    const originalCardsWidth = originalCards.length * (slider.clientWidth / 2);
                    slider.scrollTo({
                        left: originalCardsWidth - slider.clientWidth + 20,
                        behavior: 'auto'
                    });
                }
            }
            
            // İndikatörleri güncelleme fonksiyonu
            function updateIndicators() {
                if (!indicatorDots || indicatorDots.length === 0) return;
                
                const cardWidth = slider.offsetWidth / 2; // Her görünümde 2 kart
                const scrollPosition = slider.scrollLeft;
                
                // Döngüsel hale getirmek için modulo kullan
                const adjustedPosition = scrollPosition % (originalCards.length * cardWidth / 2);
                
                // Aktif indikatör indeksini hesapla
                const activeIndex = Math.floor(adjustedPosition / cardWidth);
                
                // Tüm indikatörleri pasif yap, sonra aktif olanı belirle
                indicatorDots.forEach((dot, index) => {
                    dot.classList.remove('active');
                    if (index === Math.min(activeIndex, indicatorDots.length - 1)) {
                        dot.classList.add('active');
                    }
                });
            }
            
            // İndikatörlere tıklama olayı
            if (indicatorDots) {
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
            
            slider.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
            });
            
            slider.addEventListener('touchmove', function(e) {
                moveX = e.touches[0].clientX;
            });
            
            slider.addEventListener('touchend', function() {
                if (!startX || !moveX) return;
                
                const diff = startX - moveX;
                const cardWidth = slider.offsetWidth / 2; // Her görünümde 2 kart
                
                // Anlamlı bir kaydırma mesafesi varsa
                if (Math.abs(diff) > 50) {
                    let targetPosition;
                    
                    if (diff > 0) {
                        // Sola kaydırma (ileri)
                        const currentScrollPosition = slider.scrollLeft;
                        targetPosition = Math.ceil(currentScrollPosition / cardWidth) * cardWidth;
                    } else {
                        // Sağa kaydırma (geri)
                        const currentScrollPosition = slider.scrollLeft;
                        targetPosition = Math.floor(currentScrollPosition / cardWidth - 1) * cardWidth;
                        if (targetPosition < 0) targetPosition = 0;
                    }
                    
                    // Animasyonlu kaydırma
                    slider.scrollTo({
                        left: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // İndikatörleri güncelle
                    setTimeout(updateIndicators, 300);
                }
                
                // Değişkenleri sıfırla
                startX = null;
                moveX = null;
            });
            
            // Scroll olayını dinle ve indikatörleri güncelle
            slider.addEventListener('scroll', function() {
                updateIndicators();
                // Sonsuz kaydırma kontrolü
                checkInfiniteScroll();
            });
            
            // Scroll işlemi tamamen bittiğinde
            slider.addEventListener('scrollend', function() {
                checkInfiniteScroll();
            });
            
            // Fare ile kaydırma davranışı - opsiyonel
            let isDown = false;
            let scrollLeft;
            
            slider.addEventListener('mousedown', (e) => {
                if (!isMobile()) return;
                isDown = true;
                slider.classList.add('active');
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });
            
            slider.addEventListener('mouseleave', () => {
                if (!isMobile()) return;
                isDown = false;
                slider.classList.remove('active');
            });
            
            slider.addEventListener('mouseup', () => {
                if (!isMobile()) return;
                isDown = false;
                slider.classList.remove('active');
                updateIndicators();
                checkInfiniteScroll();
            });
            
            slider.addEventListener('mousemove', (e) => {
                if (!isMobile() || !isDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 2;
                slider.scrollLeft = scrollLeft - walk;
            });
            
            // İlk yüklemede indikatörleri ayarla
            updateIndicators();
            
            // İlk pozisyonlama için slider başlangıç pozisyonunu ayarla
            slider.scrollLeft = 0;
        });
        
        // Slider indicators stillerini düzenle
        const sliderIndicators = document.querySelectorAll('.slider-indicators');
        sliderIndicators.forEach(indicator => {
            indicator.style.display = 'flex';
            indicator.style.justifyContent = 'center';
            indicator.style.alignItems = 'center';
            indicator.style.gap = '8px';
            indicator.style.marginBottom = '20px';
            
            const dots = indicator.querySelectorAll('.slider-indicator');
            dots.forEach(dot => {
                dot.style.width = '8px';
                dot.style.height = '8px';
                dot.style.backgroundColor = '#ddd';
                dot.style.borderRadius = '50%';
                dot.style.transition = 'background-color 0.3s ease';
                
                if (dot.classList.contains('active')) {
                    dot.style.backgroundColor = '#00b050';
                    dot.style.transform = 'scale(1.2)';
                }
            });
        });
    }
    
    // İlk yükleme
    initMobileSliders();
    
    // Pencere boyutu değiştiğinde tekrar kontrol et
    window.addEventListener('resize', function() {
        // Mobil görünümden masaüstü görünüme geçince stilleri sıfırla
        if (window.innerWidth > 600) {
            const sliders = document.querySelectorAll('.products-row, .extra-products-row, .detox4-cards');
            
            sliders.forEach(function(slider) {
                // İşlem yapılacak elemanları belirle
                const cardClassName = slider.classList.contains('detox4-cards') ? '.detox4-card' : '.product-card';
                const cloneClassName = cardClassName + '-clone';
                
                // Slider stili sıfırlama
                slider.removeAttribute('style');
                
                // Klonlanmış kartları temizle
                const clonedCards = slider.querySelectorAll(cloneClassName);
                clonedCards.forEach(card => card.remove());
                
                // Orijinal kartları sıfırla
                const cards = slider.querySelectorAll(cardClassName);
                cards.forEach(card => {
                    card.removeAttribute('style');
                });
            });
            
            // İndikatörleri gizle
            const indicators = document.querySelectorAll('.slider-indicators');
            indicators.forEach(ind => {
                ind.style.display = 'none';
            });
        } else {
            // Mobil görünüme geçince yeniden ayarla
            initMobileSliders();
        }
    });
}); 