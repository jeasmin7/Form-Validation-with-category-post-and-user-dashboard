 <aside class="lg:w-1/3 space-y-8">
            <!-- About Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">About The Blog</h3>
                <p class="text-gray-600 mb-4">IBlog brings you the latest news, tutorials, and thought pieces on technology, programming, AI, and the digital world.</p>
                <button class="text-blue-600 font-medium hover:text-blue-800 transition">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>
            
            <!-- Categories Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Categories</h3>
                <div class="space-y-2">
                    <a href="<?php echo e(route('home.DevOps')); ?>" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Web Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                    <a href="<?php echo e(route('home.cyberSe')); ?>" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Artificial Intelligence</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">8</span>
                    </a>
                    <a href="<?php echo e(route('home.cloudComp')); ?>" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cloud Computing</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">5</span>
                    </a>
                    <a href="<?php echo e(route('home.cyberSe')); ?>" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cybersecurity</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">7</span>
                    </a>
                    <a href="<?php echo e(route('home.MobDev')); ?>" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Mobile Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">6</span>
                    </a>
                    <a href="<?php echo e(route('home.DevOps')); ?>" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">DevOps</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">4</span>
                    </a>
                </div>
            </div>
            
            <!-- Newsletter Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Newsletter</h3>
                <p class="text-gray-600 mb-4">Subscribe to get the latest posts delivered to your inbox.</p>
                <form class="space-y-4">
                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                        Subscribe
                    </button>
                </form>
            </div>
        </aside>    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div>

<?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/home/partials/sidebar.blade.php ENDPATH**/ ?>