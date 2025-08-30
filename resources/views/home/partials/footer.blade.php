<footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <!--logo is here -->
                    @include('home.partials.logo')
                    <p class="text-gray-400">Bringing you the latest in technology and digital innovation since 2025.</p>
                </div>
        
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{route('posts.index')}}" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="{{route('home.category')}}" class="text-gray-400 hover:text-white transition">Categories</a></li>
                        <li><a href="{{route('home.about')}}" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="{{route('home.DevOps')}}" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                        <li><a href="{{route('home.cyberSe')}}" class="text-gray-400 hover:text-white transition">Artificial Intelligence</a></li>
                        <li><a href="{{route('home.cloudComp')}}" class="text-gray-400 hover:text-white transition">Cloud Computing</a></li>
                        <li><a href="{{route('home.cyberSe')}}" class="text-gray-400 hover:text-white transition">Cybersecurity</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="{{route('posts.index')}}" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="{{route('posts.index')}}" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="{{route('posts.index')}}" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-linkedin"></i></a>
                        <a href="{{route('home.cloudComp')}}www.facebook.com class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-github"></i></a>
                    </div>
                    <p class="text-gray-400">contact@iblog.com</p>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 IBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
</body>
</html>

