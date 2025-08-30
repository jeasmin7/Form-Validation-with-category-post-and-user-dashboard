
<?php
$isLogin = false;

if (auth()->check()) {
    $isLogin = true;
}
?>
<div class="clearfix " style="display:hidden; overflow: auto;"></div>
<body class="bg-gray-50 font-sans">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
            <!--logo is here -->
            @include('home.partials.logo')
            
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="{{route('posts.index')}}" class="text-blue-600 font-medium">Home</a>
                <!-- Categories Dropdown -->
                <div class="relative desktop-dropdown">
                    <button class="text-gray-600 hover:text-blue-600 py-4 transition flex items-center">
                        Categories
                        <i class="fas fa-chevron-down ml-1 text-sm"></i>
                    </button>
                    <div class="absolute left-0 w-64 bg-white rounded-md shadow-lg hidden z-50 desktop-dropdown-menu">
                        <div class="py-2">
                            <div class="relative desktop-dropdown-sub">
                                <button class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                    Web Development
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <div class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                    <a href="{{route('home.frontend')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Frontend</a>
                                    <a href="{{route('home.backend')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Backend</a>
                                    <a href="{{route('home.fullstack')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Full Stack</a>
                                </div>
                            </div>
                            <div class="relative desktop-dropdown-sub">
                                <button class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                    Artificial Intelligence
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <div class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                    <a href="{{route('home.macLearn')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Machine Learning</a>
                                    <a href="{{route('home.deepLearn')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Deep Learning</a>
                                    <a href="{{route('home.nlp')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">NLP</a>
                                </div>
                            </div>
                            <a href="{{route('home.cloudComp')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cloud Computing</a>
                            <a href="{{route('home.cyberSe')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cybersecurity</a>
                            <a href="{{route('home.MobDev')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Mobile Development</a>
                            <a href="{{route('home.DevOps')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">DevOps</a>
                        </div>
                    </div>
                </div>
                <a href="{{route('home.about')}}" class="text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="{{route('home.contact')}}" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
            </nav>
            
            <div class="flex items-center space-x-4">
            <button type="button" id="{{ $isLogin ? 'user-menu-button' : '' }}"
                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                @if($isLogin)
                    <img class="w-8 h-8 rounded-full"
                        src="{{ auth()->user()->avatar ? '/avatars/' . auth()->user()->avatar : 'https://ui-avatars.com/api/?name=' . auth()->user()->name . '&background=random&color=random' }}"
                        alt="user photo">
                @else
                    <a href="{{ route('login.get') }}" class="bg-blue-500 px-4 py-2 text-white text-lg rounded">Login</a>
                @endif

            </button>
            <!-- Dropdown menu -->
            @if (auth()->check())
                <div id="user-dropdown"
                    class="z-50 hidden absolute top-5 right-0  my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf

                                <button type="submit"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endif
 <!--end dropdown menu-->
           <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
<!--end button-->
            </div>
            
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <div class="container mx-auto px-4 py-4">
                <a href="{{route('posts.index')}}" class="block py-2 text-blue-600 font-medium">Home</a>
                <a href="{{route('home.article')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Articles</a>
                <div class="relative">
                    <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-toggle">
                        Categories
                        <i class="fas fa-chevron-down ml-1 text-sm"></i>
                    </button>
                    <div id="mobile-categories" class="hidden pl-4 mobile-dropdown-menu">
                        <div class="py-1">
                            <div class="relative">
                                <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                    Web Development
                                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                                </button>
                                <div id="mobile-webdev-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                    <a href="{{route('home.frontend')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Frontend</a>
                                    <a href="{{route('home.backend')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Backend</a>
                                    <a href="{{route('home.fullstack')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Full Stack</a>
                                </div>
                            </div>
                            <div class="relative">
                                <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                    Artificial Intelligence
                                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                                </button>
                                <div id="mobile-ai-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                    <a href="{{route('home.macLearn')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Machine Learning</a>
                                    <a href="{{route('home.deepLearn')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Deep Learning</a>
                                    <a href="{{route('home.nlp')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">NLP</a>
                                </div>
                            </div>
                            <a href="{{route('home.cloudComp')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cloud Computing</a>
                            <a href="{{route('home.cyberSe')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cybersecurity</a>
                            <a href="{{route('home.MobDev')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Mobile Development</a>
                            <a href="{{route('home.DevOps')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">DevOps</a>
                        </div>
                    </div>
                </div>
                <a href="{{route('home.about')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="{{route('home.contact')}}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Contact</a>
            </div>
        </div>
    </header>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const userMenuButton = document.getElementById('user-menu-button');
        const userDropdown = document.getElementById('user-dropdown');

        userMenuButton.addEventListener('click', function () {
            userDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.add('hidden');
            }
        });
    });
</script>


