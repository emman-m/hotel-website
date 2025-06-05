<!-- Navigation -->
<nav class="fixed w-full z-50 transition-all duration-300" id="mainNav">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="/" class="nav-text text-2xl font-playfair font-bold text-white transition-colors duration-300">
                Luxury Hotel
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="/rooms" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Rooms</a>
                <a href="/booking" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Book Now</a>
                <a href="/contact" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white focus:outline-none" id="mobileMenuBtn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobileMenu">
            <div class="flex flex-col space-y-4 py-4">
                <a href="/" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="/rooms" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Rooms</a>
                <a href="/booking" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Book Now</a>
                <a href="/contact" class="nav-text text-white hover:text-gray-200 transition-colors duration-300">Contact</a>
            </div>
        </div>
    </div>
</nav>

<!-- Navigation Styles -->
<style>
    #mainNav {
        transition: all 0.3s ease;
    }
    #mainNav.scrolled {
        background-color: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(8px);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
    #mainNav.scrolled .nav-text {
        color: #1f2937 !important;
    }
    #mainNav.scrolled .nav-text:hover {
        color: #111827 !important;
    }
</style>

<!-- Navigation Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const nav = document.getElementById('mainNav');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        // Scroll effect
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 200);
        });

        // Mobile menu toggle
        mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    });
</script> 