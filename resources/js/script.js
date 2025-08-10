// Services data
const services = [
    { name: 'Virtual Office', icon: 'building', color: 'bg-yellow-500', url: '/layanan/virtual-office' },
    { name: 'Ruang Kantor', icon: 'home', color: 'bg-green-500', url: '/layanan/ruang-kantor' },
    { name: 'Ruang Meeting', icon: 'users', color: 'bg-purple-500', url: '/layanan/ruang-meeting' },
    { name: 'Coworking Space', icon: 'laptop', color: 'bg-orange-500', url: '/layanan/coworking-space' },
    { name: 'Pendirian PT', icon: 'file-text', color: 'bg-red-500', url: '/layanan/pendirian-pt' },
    { name: 'Pendirian CV', icon: 'briefcase', color: 'bg-indigo-500', url: '/layanan/pendirian-cv' }
];


// Benefits data
const benefits = [
    { title: 'Alamat Prestisius', desc: 'Lokasi strategis di pusat bisnis Jakarta', icon: 'map-pin' },
    { title: 'Legalitas Lengkap', desc: 'Dokumen resmi dan terpercaya', icon: 'shield-check' },
    { title: 'Harga Terjangkau', desc: 'Paket fleksibel sesuai budget', icon: 'dollar-sign' },
    { title: 'Tim Profesional', desc: 'Dukungan 24/7 dari ahli berpengalaman', icon: 'users' }
];

// Navbar scroll effect
function handleNavbarScroll() {
    const navbar = document.getElementById('navbar');
    const logo = document.getElementById('logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const isMobile = window.innerWidth < 768;

    // Reset semua class dulu agar tidak tertumpuk
    navbar.classList.remove('bg-white', 'bg-transparent', 'navbar-blur', 'shadow-lg', 'py-2', 'py-4');
    logo.classList.remove('text-yellow-600', 'text-white');
    navLinks.forEach(link => {
        link.classList.remove('text-white', 'text-gray-700');
    });

    if (isMobile) {
        // Mobile: selalu solid dan terang
        navbar.classList.add('bg-white', 'shadow-lg', 'py-2');
        logo.classList.add('text-yellow-600');
        navLinks.forEach(link => link.classList.add('text-gray-700'));
    } else {
        if (window.scrollY > 50) {
            // Desktop ketika scroll
            navbar.classList.add('navbar-blur', 'shadow-lg', 'py-2');
            logo.classList.add('text-yellow-600');
            navLinks.forEach(link => link.classList.add('text-gray-700'));
        } else {
            // Desktop default
            navbar.classList.add('bg-transparent', 'py-4');
            logo.classList.add('text-white');
            navLinks.forEach(link => link.classList.add('text-white'));
        }
    }
}



window.addEventListener('load', handleNavbarScroll);
window.addEventListener('resize', handleNavbarScroll);
window.addEventListener('scroll', handleNavbarScroll);


// Mobile menu toggle
function setupMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

// Intersection Observer for animations
function setupAnimations() {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 }
    );

    document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach((el) => {
        observer.observe(el);
    });
}

// Render services
// Render services
function renderServices() {
    const servicesGrid = document.getElementById('services-grid');
    servicesGrid.innerHTML = services.map((service, index) => `
    <div class="service-card bg-white p-4 sm:p-6 md:p-8 rounded-xl shadow-lg text-center ${
        index % 2 === 0 ? 'slide-in-left' : 'slide-in-right'
    }" style="animation-delay: ${index * 0.1}s">
    
            <div class="${service.color} w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i data-lucide="${service.icon}" class="w-8 h-8 text-white"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3 text-gray-800">${service.name}</h3>
            <p class="hidden md:block text-gray-600 mb-4">
            Solusi profesional untuk ${service.name.toLowerCase()} dengan kualitas terbaik
        </p>
        
        <a href="${service.url}" class="text-yellow-600 hover:text-yellow-800 font-semibold">
        Pelajari Lebih →
      </a>
      
        </div>
    `).join('');
}

// Render benefits
function renderBenefits() {
    const benefitsGrid = document.getElementById('benefits-grid');
    benefitsGrid.innerHTML = benefits.map((benefit, index) => `
        <div class="fade-in bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center" 
             style="animation-delay: ${index * 0.2}s">
            <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i data-lucide="${benefit.icon}" class="w-8 h-8 text-white"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">${benefit.title}</h3>
            <p class="opacity-90">${benefit.desc}</p>
        </div>
    `).join('');
}

// Initialize everything
document.addEventListener('DOMContentLoaded', function() {
    renderServices();
    renderBenefits();
    setupMobileMenu();
    setupAnimations();

    // Initialize Lucide icons
    lucide.createIcons();

    // Add scroll listener
    window.addEventListener('scroll', handleNavbarScroll);
});