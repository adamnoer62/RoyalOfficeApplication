// Team members data
const teamMembers = [
    {
        name: "Khoirulil Rizki Daulay",
        // position: "CEO & Founder",
        image: "/images/1.jpeg",
        // description: "Pengalaman 15+ tahun dalam industri properti dan bisnis"
    },
    {
        name: "Fadhillah Amzar",
        // position: "Head of Operations",
        image: "/images/2.jpeg",
        // description: "Expert dalam manajemen operasional dan customer service"
    },
    {
        name: "riskiyanto SE, M.Ak",
        // position: "Legal Director",
        image: "/images/3.jpeg",
        // description: "Spesialis hukum korporat dengan pengalaman 12+ tahun"
    },
    {
        name: "Dita Jatnika",
        // position: "Legal Director",
        image: "/images/4.jpeg",
        // description: "Spesialis hukum korporat dengan pengalaman 12+ tahun"
    },
    {
        name: "Calvin Hadi Kusuma S.Ak., M.A(Tax)., BKP., Ak., ACPA., CRA., CTAP., CTL.",
        // position: "Legal Director",
        image: "/images/5.jpeg",
        // description: "Spesialis hukum korporat dengan pengalaman 12+ tahun"
    },
    {
        name: "Julian Andrean",
        // position: "Legal Director",
        image: "/images/6.jpeg",
        // description: "Spesialis hukum korporat dengan pengalaman 12+ tahun"
    },
    {
        name: "M Ilham",
        // position: "Legal Director",
        image: "/images/7.jpeg",
        // description: "Spesialis hukum korporat dengan pengalaman 12+ tahun"
    },
    {
        name: "Hardiyanto",
        // position: "Legal Director",
        image: "/images/8.jpeg",
        // description: "Spesialis hukum korporat dengan pengalaman 12+ tahun"
    },
];

// Company values data
const companyValues = [
    {
        title: "Integritas",
        description: "Kami berkomitmen pada kejujuran dan transparansi dalam setiap layanan",
        icon: "shield-check"
    },
    {
        title: "Inovasi",
        description: "Selalu mencari cara baru untuk memberikan solusi terbaik bagi klien",
        icon: "lightbulb"
    },
    {
        title: "Kualitas",
        description: "Standar tinggi dalam setiap aspek layanan dan produk kami",
        icon: "star"
    },
    {
        title: "Kemitraan",
        description: "Membangun hubungan jangka panjang dengan setiap klien",
        icon: "handshake"
    }
];

// Mobile menu toggle
function setupMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
}

// Render team members
function renderTeamMembers() {
    const teamGrid = document.getElementById('team-grid');
    if (!teamGrid) return;
    
    teamGrid.innerHTML = teamMembers.map(member => `
        <div class="text-center">
            <img src="${member.image}" alt="${member.name}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
            <h3 class="text-xl font-bold text-gray-800 mb-2">${member.name}</h3>
            <p class="text-yellow-600 font-semibold mb-3">${member.position}</p>
            <p class="text-gray-600">${member.description}</p>
        </div>
    `).join('');
}

// Render company values
function renderCompanyValues() {
    const valuesGrid = document.getElementById('values-grid');
    if (!valuesGrid) return;
    
    valuesGrid.innerHTML = companyValues.map(value => `
        <div class="text-center">
            <div class="bg-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i data-lucide="${value.icon}" class="w-8 h-8 text-white"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">${value.title}</h3>
            <p class="text-gray-300">${value.description}</p>
        </div>
    `).join('');
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    renderTeamMembers();
    renderCompanyValues();
    setupMobileMenu();
    
    // Initialize Lucide icons
    lucide.createIcons();
});
