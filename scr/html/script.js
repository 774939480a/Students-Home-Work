// تحسينات القائمة المنسدلة
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');
const body = document.body; 

menuToggle.addEventListener('click', (e) => {
    e.stopPropagation();
    navLinks.classList.toggle('active');
    menuToggle.classList.toggle('active');
}); 

document.addEventListener('click', (e) => {
    if (!navLinks.contains(e.target) && !menuToggle.contains(e.target)) {
        navLinks.classList.remove('active');
        menuToggle.classList.remove('active');
    }
}); 

// تحسينات البطاقات مع إضافة تأثير اللمس
document.querySelectorAll('.dashboard-card').forEach(card => {
    card.addEventListener('click', function() {
        this.style.transform = 'scale(0.98)';
        setTimeout(() => {
            window.location.href = '#';
        }, 200);
    }); 

    card.addEventListener('touchstart', () => {
        card.style.transform = 'scale(0.98)';
    }); 

    card.addEventListener('touchend', () => {
        card.style.transform = '';
    });
}); 

// تحسينات الأداء
window.addEventListener('load', () => {
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js');
    }
});