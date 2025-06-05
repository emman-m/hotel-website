<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<div class="relative h-[40vh]">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Hotel exterior">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-white mb-6">Book Your Stay</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Experience luxury and comfort in our carefully designed accommodations.</p>
        </div>
    </div>
</div>

<!-- Booking Form -->
<div class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Form Section -->
                <div class="p-8">
                    <form id="bookingForm" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" id="name" required
                                class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" required
                                class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg">
                        </div>

                        <div>
                            <label for="room_type" class="block text-sm font-medium text-gray-700">Room Type</label>
                            <select name="room_type" id="room_type" required
                                class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg">
                                <option value="">Select a room type</option>
                                <option value="1">Deluxe Room - $150/night</option>
                                <option value="2">Executive Suite - $250/night</option>
                                <option value="3">Presidential Suite - $500/night</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="check_in" class="block text-sm font-medium text-gray-700">Check-in Date</label>
                                <input type="date" name="check_in" id="check_in" required
                                    class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg">
                            </div>

                            <div>
                                <label for="check_out" class="block text-sm font-medium text-gray-700">Check-out Date</label>
                                <input type="date" name="check_out" id="check_out" required
                                    class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg">
                            </div>
                        </div>

                        <div>
                            <label for="special_requests" class="block text-sm font-medium text-gray-700">Special Requests</label>
                            <textarea name="special_requests" id="special_requests" rows="3"
                                class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg"></textarea>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-4 px-8 border-2 border-black text-black font-medium rounded-full hover:bg-black hover:text-white transition-colors duration-300 text-lg">
                                Book Now
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Info Section -->
                <div class="bg-gray-50 p-8">
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Booking Information</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Free cancellation up to 24 hours before check-in</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Best rate guarantee</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Complimentary breakfast included</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Free WiFi throughout the hotel</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Need Help?</h3>
                            <p class="text-gray-600 mb-4">Our team is available 24/7 to assist you with your booking.</p>
                            <div class="flex items-center space-x-4">
                                <i class="fas fa-phone text-gray-600"></i>
                                <span class="text-gray-900">+1 234 567 890</span>
                            </div>
                            <div class="flex items-center space-x-4 mt-2">
                                <i class="fas fa-envelope text-gray-600"></i>
                                <span class="text-gray-900">bookings@luxuryhotel.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        room_type: document.getElementById('room_type').value,
        check_in: document.getElementById('check_in').value,
        check_out: document.getElementById('check_out').value,
        special_requests: document.getElementById('special_requests').value
    };

    // Save to localStorage
    const bookings = JSON.parse(localStorage.getItem('bookings') || '[]');
    bookings.push(formData);
    localStorage.setItem('bookings', JSON.stringify(bookings));

    // Show success message
    alert('Booking submitted successfully!');
    this.reset();
});

// Set minimum date for check-in and check-out to today
const today = new Date().toISOString().split('T')[0];
document.getElementById('check_in').min = today;
document.getElementById('check_out').min = today;

// Update check-out minimum date when check-in is selected
document.getElementById('check_in').addEventListener('change', function() {
    document.getElementById('check_out').min = this.value;
});
</script>
<?= $this->endSection() ?> 