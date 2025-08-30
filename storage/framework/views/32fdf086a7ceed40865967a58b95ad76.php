<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e($title); ?></title>

        <!--<link rel="shortcut icon" href="/logo/quick-development.png" type="image/x-icon">-->
        <!-- Fonts -->
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    </head>
    <body class="bg-gray-50 font-sans">
    <div class="flex h-screen overflow-hidden">
        
       
           <?php echo e($slot); ?>


    </body>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const sidebar = document.getElementById('sidebar');
            
            mobileMenuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
            });
            
            // Sidebar dropdown menus
            const dropdownToggles = document.querySelectorAll('.sidebar-dropdown-toggle');
            
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const dropdownMenu = this.nextElementSibling;
                    
                    // Close all other dropdowns except this one
                    document.querySelectorAll('.sidebar-dropdown-menu').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.add('hidden');
                        }
                    });
                    
                    // Toggle this dropdown
                    dropdownMenu.classList.toggle('hidden');
                });
            });
            
            // Close dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-dropdown-menu').forEach(menu => {
                    menu.classList.add('hidden');
                });
            });
            
            // User dropdown menu
            const userMenuButton = document.getElementById('user-menu-button');
            const userMenu = document.getElementById('user-menu');
            
            userMenuButton.addEventListener('click', function(e) {
                e.stopPropagation();
                userMenu.classList.toggle('hidden');
            });
            
            // Close user menu when clicking outside
            document.addEventListener('click', function() {
                userMenu.classList.add('hidden');
            });
        });
    </script
</html>

 
<?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/components/layout.blade.php ENDPATH**/ ?>