<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Our Rooms</h1>
            <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500">Experience luxury and comfort in our carefully designed rooms and suites.</p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($rooms as $room): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative h-64">
                    <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="<?= esc($room['name']) ?>">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2"><?= esc($room['name']) ?></h3>
                    <p class="text-gray-600 mb-4"><?= esc($room['description']) ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-indigo-600">$<?= number_format($room['price']) ?>/night</span>
                        <a href="/booking?room=<?= $room['id'] ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Room Features -->
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Room Features</h2>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-indigo-600 mb-4">
                    <i class="fas fa-wifi text-2xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900">Free WiFi</h3>
                <p class="mt-2 text-gray-500">High-speed internet access in all rooms</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-indigo-600 mb-4">
                    <i class="fas fa-tv text-2xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900">Smart TV</h3>
                <p class="mt-2 text-gray-500">55-inch 4K Smart TV with streaming services</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-indigo-600 mb-4">
                    <i class="fas fa-snowflake text-2xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900">Climate Control</h3>
                <p class="mt-2 text-gray-500">Individual temperature control in each room</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-indigo-600 mb-4">
                    <i class="fas fa-coffee text-2xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900">Coffee Maker</h3>
                <p class="mt-2 text-gray-500">Premium coffee and tea making facilities</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 