// Blog posts data
const blogPosts = [
    {
        title: "Cara Memilih Virtual Office yang Tepat",
        excerpt: "Panduan lengkap untuk memilih virtual office yang sesuai dengan kebutuhan bisnis Anda...",
        category: "Virtual Office",
        date: "12 Jan 2025",
        image: "https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
    },
    {
        title: "Tips Menghemat Biaya Operasional Startup",
        excerpt: "Strategi efektif untuk mengurangi pengeluaran operasional tanpa mengurangi kualitas layanan...",
        category: "Tips Bisnis",
        date: "10 Jan 2025",
        image: "https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
    },
    {
        title: "Pentingnya Alamat Prestisius untuk Bisnis",
        excerpt: "Bagaimana alamat bisnis yang tepat dapat meningkatkan kredibilitas dan kepercayaan klien...",
        category: "Branding",
        date: "8 Jan 2025",
        image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
    },
    {
        title: "Panduan Lengkap Pendirian PT",
        excerpt: "Langkah-langkah detail untuk mendirikan Perseroan Terbatas di Indonesia...",
        category: "Legal",
        date: "5 Jan 2025",
        image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
    },
    {
        title: "Tren Coworking Space di 2025",
        excerpt: "Perkembangan terbaru dalam industri coworking space dan dampaknya untuk bisnis modern...",
        category: "Trend",
        date: "3 Jan 2025",
        image: "https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
    },
    {
        title: "Manfaat Meeting Room untuk Produktivitas",
        excerpt: "Mengapa ruang meeting yang tepat dapat meningkatkan efektivitas tim dan hasil kerja...",
        category: "Produktivitas",
        date: "1 Jan 2025",
        image: "https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
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

// Render blog posts
function renderBlogPosts() {
    const blogGrid = document.getElementById('blog-grid');
    if (!blogGrid) return;
    
    blogGrid.innerHTML = blogPosts.map(post => `
        <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <img src="${post.image}" alt="${post.title}" class="w-full h-48 object-cover">
            <div class="p-6">
                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">${post.category}</span>
                <h3 class="text-xl font-bold mt-3 mb-2 text-gray-800">${post.title}</h3>
                <p class="text-gray-600 mb-4">${post.excerpt}</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2 text-gray-500 text-sm">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        <span>${post.date}</span>
                    </div>
                    <button class="text-yellow-600 hover:text-yellow-800 font-semibold">Baca →</button>
                </div>
            </div>
        </article>
    `).join('');
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    renderBlogPosts();
    setupMobileMenu();
    
    // Initialize Lucide icons
    lucide.createIcons();
});
