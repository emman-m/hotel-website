<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Luxury Hotel' ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        /* Base Styles */
        body {
            font-family: 'Poppins', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes slideInLeft {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideInRight {
            from { transform: translateX(20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes scaleIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        /* Animation Classes */
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }
        .animate-slide-up {
            animation: slideUp 0.6s ease-out;
        }
        .animate-slide-left {
            animation: slideInLeft 0.6s ease-out;
        }
        .animate-slide-right {
            animation: slideInRight 0.6s ease-out;
        }
        .animate-scale-in {
            animation: scaleIn 0.6s ease-out;
        }

        /* Hover Effects */
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .hover-lift {
            transition: transform 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
        }

        /* Form Styles */
        .form-input {
            @apply w-full px-4 py-3 bg-transparent border-b-2 border-gray-300 focus:border-gray-900 focus:outline-none transition-colors duration-300;
        }
        .form-label {
            @apply block text-sm font-medium text-gray-700 mb-1;
        }
        .form-error {
            @apply text-red-500 text-sm mt-1;
        }
        .btn-primary {
            @apply inline-block px-8 py-3 bg-black text-white rounded hover:bg-gray-800 transition-colors duration-300;
        }
        .btn-secondary {
            @apply inline-block px-8 py-3 border-2 border-black text-black rounded hover:bg-black hover:text-white transition-colors duration-300;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <?= view('partials/nav') ?>

    <!-- Main Content -->
    <main class="flex-grow">
        <?php if (session()->has('success')): ?>
            <div class="fixed top-20 right-4 bg-green-500 text-white px-6 py-3 rounded shadow-lg animate-slide-left z-50">
                <?= session('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->has('error')): ?>
            <div class="fixed top-20 right-4 bg-red-500 text-white px-6 py-3 rounded shadow-lg animate-slide-left z-50">
                <?= session('error') ?>
            </div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <?= view('partials/footer') ?>

    <!-- CSRF Token -->
    <script>
        const csrfToken = '<?= csrf_hash() ?>';
        
        // Add CSRF token to all forms
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '<?= csrf_token() ?>';
                csrfInput.value = csrfToken;
                form.appendChild(csrfInput);
            });
        });
    </script>

    <!-- Flash Message Auto-hide -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessages = document.querySelectorAll('.fixed.top-20');
            flashMessages.forEach(message => {
                setTimeout(() => {
                    message.style.opacity = '0';
                    message.style.transition = 'opacity 0.5s ease-out';
                    setTimeout(() => message.remove(), 500);
                }, 3000);
            });
        });
    </script>
</body>
</html> 