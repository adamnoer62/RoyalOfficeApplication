function Footer() {
    try {
        React.useEffect(() => {
            lucide.createIcons();
        }, []);

        return (
            <footer 
                data-name="footer" 
                data-file="components/Footer.js"
                className="bg-gray-900 text-white py-12"
            >
                <div className="container mx-auto px-4">
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h3 className="text-2xl font-bold mb-4 text-yellow-400">BusinessHub</h3>
                            <p className="text-gray-300 mb-4">
                                Solusi terpercaya untuk kebutuhan bisnis Anda dengan layanan profesional dan berkualitas tinggi.
                            </p>
                            <div className="flex space-x-4">
                                <a href="#" className="text-gray-300 hover:text-yellow-400">
                                    <i data-lucide="facebook" className="w-6 h-6"></i>
                                </a>
                                <a href="#" className="text-gray-300 hover:text-yellow-400">
                                    <i data-lucide="instagram" className="w-6 h-6"></i>
                                </a>
                                <a href="#" className="text-gray-300 hover:text-yellow-400">
                                    <i data-lucide="linkedin" className="w-6 h-6"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div>
                            <h4 className="text-lg font-semibold mb-4">Layanan</h4>
                            <ul className="space-y-2 text-gray-300">
                                <li><a href="#" className="hover:text-yellow-400">Virtual Office</a></li>
                                <li><a href="#" className="hover:text-yellow-400">Ruang Kantor</a></li>
                                <li><a href="#" className="hover:text-yellow-400">Coworking Space</a></li>
                                <li><a href="#" className="hover:text-yellow-400">Pendirian PT/CV</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 className="text-lg font-semibold mb-4">Kontak</h4>
                            <div className="space-y-2 text-gray-300">
                                <p className="flex items-center">
                                    <i data-lucide="map-pin" className="w-4 h-4 mr-2"></i>
                                    Jakarta Pusat, Indonesia
                                </p>
                                <p className="flex items-center">
                                    <i data-lucide="phone" className="w-4 h-4 mr-2"></i>
                                    +62 21 1234 5678
                                </p>
                                <p className="flex items-center">
                                    <i data-lucide="mail" className="w-4 h-4 mr-2"></i>
                                    info@businesshub.com
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div className="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                        <p>&copy; 2025 BusinessHub. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        );
    } catch (error) {
        console.error('Footer component error:', error);
        reportError(error);
    }
}
