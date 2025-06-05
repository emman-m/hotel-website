<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<div class="relative h-[40vh]">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Luxury room">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-white mb-6 animate-fade-in">Our Rooms & Suites</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.2s;">Experience luxury and comfort in our carefully designed accommodations.</p>
        </div>
    </div>
</div>

<!-- Room Listings -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Deluxe Room -->
            <div class="fade-in-on-scroll hover-scale">
                <div class="relative h-96 mb-6 overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Deluxe Room" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/20 hover:bg-black/40 transition-colors duration-300"></div>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Deluxe Room</h3>
                <p class="text-gray-600 mb-6">Spacious and elegant room with modern amenities and city views.</p>
                <div class="flex flex-wrap gap-4 mb-6">
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-wifi mr-2"></i>
                        Free WiFi
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-tv mr-2"></i>
                        Smart TV
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-snowflake mr-2"></i>
                        Climate Control
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-coffee mr-2"></i>
                        Coffee Maker
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-gray-900">$150/night</span>
                    <a href="/booking" class="inline-flex items-center px-6 py-2 border-2 border-black text-black font-medium rounded-full hover:bg-black hover:text-white transition-colors duration-300">
                        Book Now
                    </a>
                </div>
            </div>

            <!-- Executive Suite -->
            <div class="fade-in-on-scroll hover-scale" style="animation-delay: 0.2s;">
                <div class="relative h-96 mb-6 overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Executive Suite" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/20 hover:bg-black/40 transition-colors duration-300"></div>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Executive Suite</h3>
                <p class="text-gray-600 mb-6">Luxurious suite with separate living area and premium amenities.</p>
                <div class="flex flex-wrap gap-4 mb-6">
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-wifi mr-2"></i>
                        Free WiFi
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-tv mr-2"></i>
                        Smart TV
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-snowflake mr-2"></i>
                        Climate Control
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-coffee mr-2"></i>
                        Coffee Maker
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-gray-900">$250/night</span>
                    <a href="/booking" class="inline-flex items-center px-6 py-2 border-2 border-black text-black font-medium rounded-full hover:bg-black hover:text-white transition-colors duration-300">
                        Book Now
                    </a>
                </div>
            </div>

            <!-- Presidential Suite -->
            <div class="fade-in-on-scroll hover-scale" style="animation-delay: 0.4s;">
                <div class="relative h-96 mb-6 overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Presidential Suite" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/20 hover:bg-black/40 transition-colors duration-300"></div>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Presidential Suite</h3>
                <p class="text-gray-600 mb-6">Ultimate luxury with panoramic views and exclusive services.</p>
                <div class="flex flex-wrap gap-4 mb-6">
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-wifi mr-2"></i>
                        Free WiFi
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-tv mr-2"></i>
                        Smart TV
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-snowflake mr-2"></i>
                        Climate Control
                    </span>
                    <span class="flex items-center text-gray-600">
                        <i class="fas fa-coffee mr-2"></i>
                        Coffee Maker
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-gray-900">$500/night</span>
                    <a href="/booking" class="inline-flex items-center px-6 py-2 border-2 border-black text-black font-medium rounded-full hover:bg-black hover:text-white transition-colors duration-300">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4 fade-in-on-scroll">Room Features</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto fade-in-on-scroll">Every detail has been carefully considered for your comfort.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center fade-in-on-scroll hover-scale">
                <div class="w-20 h-20 mx-auto mb-6 bg-white rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-bed text-3xl text-gray-900"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium Bedding</h3>
                <p class="text-gray-600">Luxurious mattresses and high-quality linens for a perfect night's sleep.</p>
            </div>
            <div class="text-center fade-in-on-scroll hover-scale" style="animation-delay: 0.2s;">
                <div class="w-20 h-20 mx-auto mb-6 bg-white rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-shower text-3xl text-gray-900"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Luxury Bathroom</h3>
                <p class="text-gray-600">Spacious bathrooms with premium fixtures and designer toiletries.</p>
            </div>
            <div class="text-center fade-in-on-scroll hover-scale" style="animation-delay: 0.4s;">
                <div class="w-20 h-20 mx-auto mb-6 bg-white rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-concierge-bell text-3xl text-gray-900"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">24/7 Service</h3>
                <p class="text-gray-600">Round-the-clock room service and concierge assistance.</p>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="relative py-24 bg-black">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover opacity-20" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Luxury room">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6 fade-in-on-scroll">Ready to Book Your Stay?</h2>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8 fade-in-on-scroll">Experience luxury and comfort in our carefully designed accommodations.</p>
        <a href="/booking" class="inline-flex items-center px-8 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-black transition-colors duration-300 fade-in-on-scroll">
            Book Now
        </a>
    </div>
</div>
<?= $this->endSection() ?> 