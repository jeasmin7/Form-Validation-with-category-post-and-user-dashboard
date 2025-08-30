
 <div class="flex-1 overflow-auto">
            <header class="bg-white shadow-sm sticky top-0 z-10">
                <div class="flex justify-between items-center px-4 py-4 sm:px-6 lg:px-8">
                    <button class="md:hidden text-gray-500 focus:outline-none" id="mobile-menu-button">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    
                    <div class="flex-1 max-w-md mx-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" placeholder="Search dashboard..." class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                 <!---post create button --->
                    <div class="flex-1 max-w-md mx-4">
                        <div class="relative">
                       <a class="text-2xl border-dashed border-green-500 border-2 leading-22 
                       rounded h-full w-full text-center text-green-600 dark:text-green-600" href="<?php echo e(route('posts.create.get')); ?>"> Create post</a>
                              
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <button class="p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i class="fas fa-envelope text-xl"></i>
                        </button>
                        
                        <div class="relative">
                            <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none">
                                <img class="w-8 h-8 rounded-full"
                                src="<?php echo e(auth()->user()->avatar ? '/avatars/' . auth()->user()->avatar : 'https://ui-avatars.com/api/?name=' . auth()->user()->name . '&background=random&color=random'); ?>"
                                alt="user photo">
                                <span class="hidden md:inline text-gray-700"><?php echo e(auth()->user()->name); ?></span>
                                <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                            </button>
                            
                            <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Notifications</a>
                                <div class="border-t border-gray-200"></div>
                                <a href="<?php echo e(route('logout')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header><?php /**PATH E:\php_laravel_interactive\assignment\UserBlog\resources\views/dashboard/navbar.blade.php ENDPATH**/ ?>