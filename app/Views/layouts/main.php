<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-2xl font-bold text-gray-800">Luxury Hotel</a>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="/" class="inline-flex items-center px-1 pt-1 text-gray-900">Home</a>
                        <a href="/rooms" class="inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-900">Rooms</a>
                        <a href="/booking" class="inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-900">Book Now</a>
                        <a href="/contact" class="inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-900">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <p>123 Hotel Street</p>
                    <p>City, Country</p>
                    <p>Phone: +1 234 567 890</p>
                    <p>Email: info@luxuryhotel.com</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul>
                        <li><a href="/" class="hover:text-gray-300">Home</a></li>
                        <li><a href="/rooms" class="hover:text-gray-300">Rooms</a></li>
                        <li><a href="/booking" class="hover:text-gray-300">Book Now</a></li>
                        <li><a href="/contact" class="hover:text-gray-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p>&copy; <?= date('Y') ?> Luxury Hotel. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Common JavaScript functions
        function saveToLocalStorage(key, data) {
            localStorage.setItem(key, JSON.stringify(data));
        }

        function getFromLocalStorage(key) {
            const data = localStorage.getItem(key);
            return data ? JSON.parse(data) : null;
        }
    </script>
</body>
</html> 