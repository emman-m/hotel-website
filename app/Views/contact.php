<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<div class="relative h-[40vh]">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="<?= base_url('images/pool.jpg') ?>" alt="Hotel exterior">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-white mb-6 animate-fade-in">Contact Us</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.2s;">Get in touch with us for any inquiries or assistance.</p>
        </div>
    </div>
</div>

<!-- Contact Information -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="fade-in-on-scroll">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Send us a Message</h2>
                <form id="contactForm" class="space-y-6">
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
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" name="subject" id="subject" required
                            class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" required
                            class="mt-1 block w-full border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 px-0 py-2 text-lg"></textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-8 border-2 border-black text-black font-medium rounded-full hover:bg-black hover:text-white transition-colors duration-300 text-lg">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="fade-in-on-scroll" style="animation-delay: 0.2s;">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Contact Information</h2>
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-gray-900"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Address</h3>
                            <p class="text-gray-600">123 Luxury Street<br>City, Country</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-gray-900"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Phone</h3>
                            <p class="text-gray-600">+1 234 567 890</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-gray-900"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600">info@luxuryhotel.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-gray-900"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Hours</h3>
                            <p class="text-gray-600">24/7 Front Desk Service</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-12">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-black hover:text-white transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-black hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-black hover:text-white transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="h-[400px] bg-gray-100">
    <div class="w-full h-full">
        <!-- Replace with your actual map embed code -->
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1647043087964!5m2!1sen!2s" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
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
    const messages = JSON.parse(localStorage.getItem('contactMessages') || '[]');
    messages.push(formData);
    localStorage.setItem('contactMessages', JSON.stringify(messages));

    // Show success message
    alert('Message sent successfully!');
    this.reset();
});
</script>
<?= $this->endSection() ?> 