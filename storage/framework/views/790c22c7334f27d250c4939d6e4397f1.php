     
    <?php $__env->startSection('content'); ?>
    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="auth-container max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg">
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <i class="fas fa-user-circle text-5xl text-blue-600"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900">Welcome back</h2>
                <p class="mt-2 text-gray-600">Sign in to access your account</p>
                <a href="<?php echo e(route('posts.index')); ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                        </svg>

                    </a>
            </div>
             

            <!-- Login Form -->
            <form class="mt-8 space-y-6" action="<?php echo e(route('login.post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="rounded-md shadow-sm space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                   class="input-focus pl-10 block w-full px-3 py-3 border border-gray-300 rounded-md focus:outline-none"
                                   placeholder="you@example.com">
                                   <?php if($errors->has('email')): ?>
                                   <span class="text-red-500 text-sm"><?php echo e($errors->first('email')); ?></span>
                                   <?php endif; ?>
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                   class="input-focus pl-10 block w-full px-3 py-3 border border-gray-300 rounded-md focus:outline-none"
                                   placeholder="••••••••">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none" id="togglePassword">
                                    <i class="fas fa-eye-slash" id="passwordIcon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox"
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-sign-in-alt text-blue-300 group-hover:text-blue-200"></i>
                        </span>
                        Sign in
                    </button>
                </div>
            </form>

            <!-- Social Login -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-3 gap-3">
                    <div>
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fab fa-google text-red-500"></i>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fab fa-github text-gray-800"></i>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fab fa-twitter text-blue-400"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sign Up Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account?
                    <a href="<?php echo e(route('register.get')); ?>" class="font-medium text-blue-600 hover:text-blue-500">Sign up</a>
                </p>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/auth/login.blade.php ENDPATH**/ ?>