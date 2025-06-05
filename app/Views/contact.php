<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Contact Us</h1>
            <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500">Get in touch with us for any inquiries or special requests.</p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-8 lg:grid-cols-2">
            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <form id="contactForm" class="space-y-6">
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
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" name="subject" id="subject" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Information and Map -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-indigo-600 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900">123 Hotel Street</p>
                                <p class="text-gray-500">City, Country</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <i class="fas fa-phone text-indigo-600 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900">+1 234 567 890</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <i class="fas fa-envelope text-indigo-600 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900">info@luxuryhotel.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1645564750987!5m2!1sen!2s"
                        width="100%"
                        height="300"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value
    };

    // Save to localStorage
    const contacts = JSON.parse(localStorage.getItem('contacts') || '[]');
    contacts.push(formData);
    localStorage.setItem('contacts', JSON.stringify(contacts));

    // Show success message
    alert('Message sent successfully!');
    this.reset();
});
</script>
<?= $this->endSection() ?> 