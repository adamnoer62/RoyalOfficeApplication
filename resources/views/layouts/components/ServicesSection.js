function ServicesSection() {
    try {
        const services = [
            { name: 'Virtual Office', icon: 'building', color: 'bg-yellow-500' },
            { name: 'Ruang Kantor', icon: 'home', color: 'bg-green-500' },
            { name: 'Ruang Meeting', icon: 'users', color: 'bg-purple-500' },
            { name: 'Coworking Space', icon: 'laptop', color: 'bg-orange-500' },
            { name: 'Pendirian PT', icon: 'file-text', color: 'bg-red-500' },
            { name: 'Pendirian CV', icon: 'briefcase', color: 'bg-indigo-500' }
        ];

        React.useEffect(() => {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                },
                { threshold: 0.1 }
            );

            document.querySelectorAll('.slide-in-left, .slide-in-right').forEach((el) => {
                observer.observe(el);
            });

            lucide.createIcons();
            return () => observer.disconnect();
        }, []);

        return (
            <section 
                data-name="services-section" 
                data-file="components/ServicesSection.js"
                className="py-20 bg-gray-50"
            >
                <div className="container mx-auto px-4">
                    <h2 className="slide-in-left text-4xl font-bold text-center mb-4 text-gray-800">
                        Semua Layanan Kami
                    </h2>
                    <p className="slide-in-right text-xl text-center mb-12 text-gray-600 max-w-2xl mx-auto">
                        Solusi lengkap untuk kebutuhan bisnis Anda dengan standar profesional terbaik
                    </p>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {services.map((service, index) => (
                            <div
                                key={service.name}
                                className={`service-card bg-white p-8 rounded-xl shadow-lg text-center ${
                                    index % 2 === 0 ? 'slide-in-left' : 'slide-in-right'
                                }`}
                                style={{ animationDelay: `${index * 0.1}s` }}
                            >
                                <div className={`${service.color} w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4`}>
                                    <i data-lucide={service.icon} className="w-8 h-8 text-white"></i>
                                </div>
                                <h3 className="text-xl font-semibold mb-3 text-gray-800">{service.name}</h3>
                                <p className="text-gray-600 mb-4">
                                    Solusi profesional untuk {service.name.toLowerCase()} dengan kualitas terbaik
                                </p>
                                <button className="text-yellow-600 hover:text-yellow-800 font-semibold">
                                    Pelajari Lebih →
                                </button>
                            </div>
                        ))}
                    </div>
                </div>
            </section>
        );
    } catch (error) {
        console.error('ServicesSection component error:', error);
        reportError(error);
    }
}
