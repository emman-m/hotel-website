<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<div class="relative h-screen">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Hotel exterior">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-6xl font-bold text-white mb-6 animate-fade-in">Welcome to Luxury Hotel</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.2s;">Experience unparalleled luxury and comfort in the heart of the city.</p>
            <div class="mt-8 flex justify-center space-x-4 animate-slide-up" style="animation-delay: 0.4s;">
                <a href="/booking" class="inline-flex items-center px-8 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-black transition-colors duration-300">
                    Book Now
                </a>
                <a href="/rooms" class="inline-flex items-center px-8 py-3 border-2 border-transparent text-white font-medium rounded-full bg-black/50 hover:bg-black transition-colors duration-300">
                    Explore Rooms
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4 fade-in-on-scroll">Our Features</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto fade-in-on-scroll">Discover what makes our hotel truly special.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center fade-in-on-scroll hover-scale">
                <div class="w-20 h-20 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-bed text-3xl text-gray-900"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Luxury Rooms</h3>
                <p class="text-gray-600">Experience the perfect blend of comfort and elegance in our meticulously designed rooms.</p>
            </div>
            <div class="text-center fade-in-on-scroll hover-scale" style="animation-delay: 0.2s;">
                <div class="w-20 h-20 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-utensils text-3xl text-gray-900"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Fine Dining</h3>
                <p class="text-gray-600">Savor exquisite cuisine prepared by our world-class chefs using the finest ingredients.</p>
            </div>
            <div class="text-center fade-in-on-scroll hover-scale" style="animation-delay: 0.4s;">
                <div class="w-20 h-20 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-spa text-3xl text-gray-900"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Spa & Wellness</h3>
                <p class="text-gray-600">Rejuvenate your body and mind with our premium spa treatments and wellness programs.</p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4 fade-in-on-scroll">Guest Reviews</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto fade-in-on-scroll">What our guests say about their stay.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg fade-in-on-scroll hover-lift">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6">"An absolutely amazing experience. The staff went above and beyond to make our stay memorable."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-bold text-gray-900">John Smith</h4>
                        <p class="text-gray-600">Business Traveler</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg fade-in-on-scroll hover-lift" style="animation-delay: 0.2s;">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6">"The rooms are beautifully designed and the service is impeccable. Will definitely return!"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                        <p class="text-gray-600">Luxury Traveler</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg fade-in-on-scroll hover-lift" style="animation-delay: 0.4s;">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6">"The spa treatments were incredible and the restaurant served the best food I've ever had."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-bold text-gray-900">Michael Brown</h4>
                        <p class="text-gray-600">Spa Enthusiast</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="relative py-24 bg-black">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover opacity-20" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Hotel exterior">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6 fade-in-on-scroll">Ready to Experience Luxury?</h2>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8 fade-in-on-scroll">Book your stay now and enjoy our exclusive amenities and services.</p>
        <a href="/booking" class="inline-flex items-center px-8 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-black transition-colors duration-300 fade-in-on-scroll">
            Book Your Stay
        </a>
    </div>
</div>
<?= $this->endSection() ?> 