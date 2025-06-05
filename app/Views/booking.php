<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Book Your Stay</h1>
            <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500">Fill out the form below to make your reservation.</p>
        </div>

        <div class="mt-12 max-w-lg mx-auto">
            <form id="bookingForm" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="room_type" class="block text-sm font-medium text-gray-700">Room Type</label>
                    <select name="room_type" id="room_type" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
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
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="check_out" class="block text-sm font-medium text-gray-700">Check-out Date</label>
                        <input type="date" name="check_out" id="check_out" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>

                <div>
                    <label for="special_requests" class="block text-sm font-medium text-gray-700">Special Requests</label>
                    <textarea name="special_requests" id="special_requests" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Book Now
                    </button>
                </div>
            </form>
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