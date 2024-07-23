document.addEventListener('DOMContentLoaded', () => {
    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Scroll Animations
    document.addEventListener('scroll', () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        elements.forEach(element => {
            const position = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (position < windowHeight - 150) {
                element.classList.add('visible');
            }
        });
    });

    // Typewriter Effect
    function typewriter(element, text, speed) {
        let i = 0;
        const interval = setInterval(() => {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
            } else {
                clearInterval(interval);
            }
        }, speed);
    }

    const typewriterElement = document.querySelector('.typewriter');
    if (typewriterElement) {
        typewriterElement.textContent = ''; // Clear text initially
        typewriter(typewriterElement, 'Welcome to My Portfolio!', 100);
    }

    // Responsive Menu Toggle
    const menuToggle = document.getElementById('menu-toggle');
    const nav = document.querySelector('header nav');
    
    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('show');
    });
});
