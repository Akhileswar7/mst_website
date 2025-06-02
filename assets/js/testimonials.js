

// testimonials script
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const carousel = document.getElementById('testimonials-carousel');
    const cards = document.querySelectorAll('.testimonial-card');
    const dotsContainer = document.getElementById('testimonial-dots');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    
    // State
    let currentIndex = 0;
    const cardWidth = cards[0].offsetWidth + 30;
    let autoSlideInterval;
    
    // Initialize
    function initTestimonials() {
        createPaginationDots();
        updateActiveState(0);
        startAutoSlide();
        setupIntersectionObserver();
        setupEventListeners();
    }
    
    // Create pagination dots
    function createPaginationDots() {
        cards.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('pagination-dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
    }
    
    // Update active state
    function updateActiveState(index) {
        // Update cards
        cards.forEach(card => card.classList.remove('active'));
        cards[index].classList.add('active');
        
        // Update dots
        const dots = document.querySelectorAll('.pagination-dot');
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
        
        // Center the active card
        carousel.scrollTo({
            left: index * cardWidth,
            behavior: 'smooth'
        });
        
        currentIndex = index;
    }
    
    // Navigation functions
    function goToSlide(index) {
        if (index < 0) index = cards.length - 1;
        if (index >= cards.length) index = 0;
        updateActiveState(index);
        resetAutoSlide();
    }
    
    function nextSlide() {
        goToSlide(currentIndex + 1);
    }
    
    function prevSlide() {
        goToSlide(currentIndex - 1);
    }
    
    // Auto-slide functionality
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 6000);
    }
    
    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }
    
    // Intersection Observer for animations
    function setupIntersectionObserver() {
        const observerOptions = {
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) scale(0.98)';
                }
            });
        }, observerOptions);
        
        cards.forEach(card => {
            observer.observe(card);
        });
    }
    
    // Event listeners
    function setupEventListeners() {
        // Button controls
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') prevSlide();
            if (e.key === 'ArrowRight') nextSlide();
        });
        
        // Pause auto-slide on hover
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });
        
        carousel.addEventListener('mouseleave', () => {
            resetAutoSlide();
        });
        
        // Handle window resize
        window.addEventListener('resize', () => {
            goToSlide(currentIndex);
        });
    }
    
    // Initialize the testimonials
    initTestimonials();
});