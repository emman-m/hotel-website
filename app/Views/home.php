<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<div class="relative bg-gray-900 h-[600px]">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Hotel exterior">
        <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Welcome to Luxury Hotel</h1>
        <p class="mt-6 text-xl text-gray-300 max-w-3xl">Experience unparalleled luxury and comfort in the heart of the city. Our world-class amenities and exceptional service will make your stay unforgettable.</p>
        <div class="mt-10">
            <a href="/booking" class="inline-block bg-white py-3 px-8 border border-transparent rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                Book Now
            </a>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="text-center">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white mx-auto">
                    <i class="fas fa-concierge-bell text-xl"></i>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900">24/7 Service</h3>
                <p class="mt-2 text-base text-gray-500">Round-the-clock concierge and room service for your convenience.</p>
            </div>
            <div class="text-center">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white mx-auto">
                    <i class="fas fa-spa text-xl"></i>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900">Spa & Wellness</h3>
                <p class="mt-2 text-base text-gray-500">Rejuvenate your body and mind at our world-class spa facility.</p>
            </div>
            <div class="text-center">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white mx-auto">
                    <i class="fas fa-utensils text-xl"></i>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900">Fine Dining</h3>
                <p class="mt-2 text-base text-gray-500">Experience culinary excellence at our award-winning restaurants.</p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">What Our Guests Say</h2>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"An absolutely amazing experience! The staff went above and beyond to make our stay memorable."</p>
                <p class="font-semibold text-gray-900">- John Smith</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"The rooms are spacious and luxurious. The view from our suite was breathtaking!"</p>
                <p class="font-semibold text-gray-900">- Sarah Johnson</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"The spa treatments were incredible. I've never felt more relaxed in my life!"</p>
                <p class="font-semibold text-gray-900">- Michael Brown</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 