<footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <!--logo is here -->
                    <?php echo $__env->make('home.partials.logo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <p class="text-gray-400">Bringing you the latest in technology and digital innovation since 2025.</p>
                </div>
        
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="<?php echo e(route('posts.index')); ?>" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="<?php echo e(route('home.category')); ?>" class="text-gray-400 hover:text-white transition">Categories</a></li>
                        <li><a href="<?php echo e(route('home.about')); ?>" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="<?php echo e(route('home.DevOps')); ?>" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                        <li><a href="<?php echo e(route('home.cyberSe')); ?>" class="text-gray-400 hover:text-white transition">Artificial Intelligence</a></li>
                        <li><a href="<?php echo e(route('home.cloudComp')); ?>" class="text-gray-400 hover:text-white transition">Cloud Computing</a></li>
                        <li><a href="<?php echo e(route('home.cyberSe')); ?>" class="text-gray-400 hover:text-white transition">Cybersecurity</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="<?php echo e(route('posts.index')); ?>" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo e(route('posts.index')); ?>" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo e(route('posts.index')); ?>" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo e(route('home.cloudComp')); ?>www.facebook.com class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-github"></i></a>
                    </div>
                    <p class="text-gray-400">contact@iblog.com</p>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 IBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
</body>
</html>

<?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/home/partials/footer.blade.php ENDPATH**/ ?>