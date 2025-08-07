function Navbar() {
    try {
        const [isScrolled, setIsScrolled] = React.useState(false);
        const [isMobileMenuOpen, setIsMobileMenuOpen] = React.useState(false);

        React.useEffect(() => {
            const handleScroll = () => {
                setIsScrolled(window.scrollY > 50);
            };
            window.addEventListener('scroll', handleScroll);
            return () => window.removeEventListener('scroll', handleScroll);
        }, []);

        return (
            <header 
                data-name="navbar" 
                data-file="components/Navbar.js"
                className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
                    isScrolled ? 'navbar-blur shadow-lg py-2' : 'bg-transparent py-4'
                }`}
            >
                <div className="container mx-auto px-4 flex justify-between items-center">
                    <div className={`text-2xl font-bold transition-colors duration-300 ${
                        isScrolled ? 'text-yellow-600' : 'text-white'
                    }`}>
                        BusinessHub
                    </div>
                    
                    <nav className="hidden md:flex space-x-8">
                        {['Beranda', 'Layanan', 'Tentang', 'Kontak'].map((item) => (
                            <a
                                key={item}
                                href="#"
                                className={`transition-colors duration-300 hover:text-yellow-500 ${
                                    isScrolled ? 'text-gray-700' : 'text-white'
                                }`}
                            >
                                {item}
                            </a>
                        ))}
                    </nav>

                    <button
                        onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
                        className={`md:hidden transition-colors duration-300 ${
                            isScrolled ? 'text-gray-700' : 'text-white'
                        }`}
                    >
                        <i data-lucide="menu" className="w-6 h-6"></i>
                    </button>
                </div>

                {isMobileMenuOpen && (
                    <div className="md:hidden bg-white shadow-lg">
                        <nav className="px-4 py-2 space-y-2">
                            {['Beranda', 'Layanan', 'Tentang', 'Kontak'].map((item) => (
                                <a
                                    key={item}
                                    href="#"
                                    className="block py-2 text-gray-700 hover:text-yellow-500"
                                >
                                    {item}
                                </a>
                            ))}
                        </nav>
                    </div>
                )}
            </header>
        );
    } catch (error) {
        console.error('Navbar component error:', error);
        reportError(error);
    }
}
