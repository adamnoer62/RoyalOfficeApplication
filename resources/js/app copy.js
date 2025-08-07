function App() {
    try {
        React.useEffect(() => {
            lucide.createIcons();
        }, []);

        return (
            <div data-name="app" data-file="app.js">
                <Navbar />
                <HeroSection />
                <ServicesSection />
                <WhyChooseUs />
                <Footer />
            </div>
        );
    } catch (error) {
        console.error('App component error:', error);
        reportError(error);
    }
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
