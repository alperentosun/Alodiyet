document.addEventListener('DOMContentLoaded', function() {
    // Kategori filtreleme
    const filterLinks = document.querySelectorAll('.filter-group ul li a');
    
    filterLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Aktif sınıfını kaldır
            filterLinks.forEach(l => l.classList.remove('active'));
            
            // Tıklanan linke aktif sınıfını ekle
            this.classList.add('active');
            
            // Burada filtreleme işlemleri yapılabilir
            const category = this.textContent.trim();
            filterPackages(category);
        });
    });
    
    function filterPackages(category) {
        const packages = document.querySelectorAll('.package-card');
        
        packages.forEach(package => {
            if (category === 'Tümü') {
                package.style.display = 'block';
            } else {
                // Burada paket kategorisine göre filtreleme yapılabilir
                // Örnek: package.dataset.category === category
                package.style.display = 'block';
            }
        });
    }
    
    // Paket kartları hover efekti
    const packageCards = document.querySelectorAll('.package-card');
    
    packageCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Mobil slider okları
    function isMobile() {
        return window.innerWidth <= 768;
    }
    const slider = document.querySelector('.products-slider');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    if (slider && prevArrow && nextArrow) {
        prevArrow.addEventListener('click', function() {
            if (isMobile()) {
                slider.scrollBy({ left: -slider.offsetWidth, behavior: 'smooth' });
            }
        });
        nextArrow.addEventListener('click', function() {
            if (isMobile()) {
                slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
            }
        });
    }
}); 