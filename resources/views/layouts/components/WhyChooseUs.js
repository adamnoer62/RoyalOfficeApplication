function WhyChooseUs() {
    try {
        const benefits = [
            { title: 'Alamat Prestisius', desc: 'Lokasi strategis di pusat bisnis Jakarta', icon: 'map-pin' },
            { title: 'Legalitas Lengkap', desc: 'Dokumen resmi dan terpercaya', icon: 'shield-check' },
            { title: 'Harga Terjangkau', desc: 'Paket fleksibel sesuai budget', icon: 'dollar-sign' },
            { title: 'Tim Profesional', desc: 'Dukungan 24/7 dari ahli berpengalaman', icon: 'users' }
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

            document.querySelectorAll('.fade-in').forEach((el) => {
                observer.observe(el);
            });

            lucide.createIcons();
            return () => observer.disconnect();
        }, []);

        return (
            <section 
                data-name="why-choose-us" 
                data-file="components/WhyChooseUs.js"
                className="service-parallax parallax-bg py-20 text-white"
            >
                <div className="container mx-auto px-4">
                    <h2 className="fade-in text-4xl font-bold text-center mb-4">
                        Mengapa Memilih Kami?
                    </h2>
                    <p className="fade-in text-xl text-center mb-12 max-w-2xl mx-auto opacity-90">
                        Kepercayaan ribuan klien adalah bukti komitmen kami terhadap kualitas layanan terbaik
                    </p>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        {benefits.map((benefit, index) => (
                            <div
                                key={benefit.title}
                                className="fade-in bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center"
                                style={{ animationDelay: `${index * 0.2}s` }}
                            >
                                <div className="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i data-lucide={benefit.icon} className="w-8 h-8 text-white"></i>
                                </div>
                                <h3 className="text-xl font-semibold mb-3">{benefit.title}</h3>
                                <p className="opacity-90">{benefit.desc}</p>
                            </div>
                        ))}
                    </div>
                </div>
            </section>
        );
    } catch (error) {
        console.error('WhyChooseUs component error:', error);
        reportError(error);
    }
}
