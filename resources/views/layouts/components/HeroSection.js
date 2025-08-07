function HeroSection() {
    try {
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

            return () => observer.disconnect();
        }, []);

        return (
            <section 
                data-name="hero-section" 
                data-file="components/HeroSection.js"
                className="hero-parallax parallax-bg min-h-screen flex items-center justify-center text-white"
            >
                <div className="container mx-auto px-4 text-center">
                    <h1 className="fade-in text-5xl md:text-6xl font-bold mb-6">
                        Solusi Bisnis
                        <span className="block text-yellow-400">Terpercaya</span>
                    </h1>
                    <p className="fade-in text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                        Dapatkan alamat prestisius dan layanan profesional untuk mengembangkan bisnis Anda
                    </p>
                    <div className="fade-in space-x-4">
                        <button className="bg-yellow-600 hover:bg-yellow-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                            Mulai Sekarang
                        </button>
                        <button className="border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-3 rounded-lg font-semibold transition-all duration-300">
                            Pelajari Lebih
                        </button>
                    </div>
                </div>
            </section>
        );
    } catch (error) {
        console.error('HeroSection component error:', error);
        reportError(error);
    }
}
