        <aside class="bg-gray-800 text-white flex-shrink-0 w-64 relative z-10 flex flex-col" id="sidebar">
            <div class="flex items-center justify-between h-16 px-4 border-b border-gray-700">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-blog text-2xl text-blue-400"></i>
                    <h1 class="text-xl font-bold">I<span class="text-blue-400">Blog</span></h1>
                </div>
                <button id="sidebar-toggle" class="text-gray-400 hover:text-white md:hidden">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="flex-grow px-2 py-4 overflow-y-auto">
                <nav class="flex-1 space-y-1">
                    <div>
                        <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-3 text-sm font-medium rounded-md bg-gray-900 text-white">
                            <i class="fas fa-tachometer-alt text-blue-400 mr-3"></i>
                    <span>Dashboard</span>
                        </a>
                    </div>
                    
                    <div class="sidebar-dropdown">
                        <button class="sidebar-dropdown-toggle flex items-center w-full px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-newspaper mr-3"></i>
                            <span>Content Management</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </button>
                        
                    <div class="sidebar-dropdown-menu hidden pl-2 mt-1 space-y-1">
                      
                    @if(auth()->user()->role ==='admin')
                            <a href="{{ route('admin.users') }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                            </a>
               
                         
                            <a href="{{route('categories.create.get')}}" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-pen mr-3 text-xs"></i>
                                <span>Create Category</span>
                            </a>
                            <a href="{{route('categories.show')}}" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-pen mr-3 text-xs"></i>
                                <span>Category List</span>
                            </a>
                         @endif
                            <a href="{{ route('dashboard.posts') }}" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-folder mr-3 text-xs"></i>
                                <span>All Posts</span>
                            </a>
                        <a href="#" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-tags mr-3 text-xs"></i>
                                <span>Tags</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="sidebar-dropdown">
                        <button class="sidebar-dropdown-toggle flex items-center w-full px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-chart-line mr-3"></i>
                            <span>Analytics & Reports</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </button>
                        <div class="sidebar-dropdown-menu hidden pl-2 mt-1 space-y-1">
                            <a href="#" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-eye mr-3 text-xs"></i>
                                <span>Traffic</span>
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-users mr-3 text-xs"></i>
                                <span>Audience</span>
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-receipt mr-3 text-xs"></i>
                                <span>Reports</span>
                            </a>
                        </div>
                    </div>
                    
                 <div>
                        <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-comments mr-3"></i>
                            <span>Comments</span>
                        </a>
                    </div>
                    
                    <div>
                        <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-bookmark mr-3"></i>
                            <span>Bookmarks</span>
                        </a>
                    </div>
                    
                    <div class="sidebar-dropdown">
                        <button class="sidebar-dropdown-toggle flex items-center w-full px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-cog mr-3"></i>
                            <span>User Settings</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </button>
                        <div class="sidebar-dropdown-menu hidden pl-2 mt-1 space-y-1">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                            <a href="{{ route('profile') }}" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-user mr-3 text-xs"></i>
                                <span>Profile</span>
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-lock mr-3 text-xs"></i>
                                <span>Security</span>
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                                <i class="fas fa-bell mr-3 text-xs"></i>
                                <span>Notifications</span>
                            </a>
                        </div>
                    </div>

                    <div>
                        <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>Messages</span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-users mr-3"></i>
                            <span>Team</span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-star mr-3"></i>
                            <span>Favorites</span>
                        </a>
                    </div>
                </nav>
            </div>
            
            <div class="mt-auto px-4 py-4 border-t border-gray-700">
                <div class="flex items-center">
                    <img class="w-8 h-8 rounded-full"
                                src="{{ auth()->user()->avatar ? '/avatars/' . auth()->user()->avatar : 'https://ui-avatars.com/api/?name=' . auth()->user()->name . '&background=random&color=random' }}"
                                alt="user photo">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-white">{{ auth()->user()->name }}</p>
                        <a href="#" class="text-xs font-medium text-gray-400 hover:text-gray-200">View profile</a>
                    </div>
                </div>
                 <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="class="mt-4 w-full flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                    
                         <i class="fas fa-sign-out-alt mr-2"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </button>
                </form>
              
            </div>
        </aside>

        
