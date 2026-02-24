<nav x-data="{ mobileMenuOpen: false }" class="bg-zinc-950 border-b border-purple-500/10 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            
            <div class="flex items-center">
                <a href="/" class="flex items-center group">
                   
             <img src="{{ asset('image/logo1.jpg') }}"
                        class="h-14 md:h-16 w-auto object-contain transition duration-500 group-hover:brightness-125" 
                        alt="Veeks Clothing"
                    >
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-10">
                <a href="/" class="text-zinc-400 hover:text-white font-light tracking-widest text-xs uppercase transition">Home</a>
                <a href="{{route('aboutPage')}}"" class="text-zinc-400 hover:text-white font-light tracking-widest text-xs uppercase transition">About</a>
                
                <a href="{{route('contactPage')}}" class="text-zinc-400 hover:text-white font-light tracking-widest text-xs uppercase transition">Contact</a>
                <a href="{{route('adminHome')}}" class="bg-purple-700 text-white px-6 py-2 rounded-md text-xs font-bold uppercase tracking-widest hover:bg-purple-600 transition shadow-lg shadow-purple-900/20">
                    Admin Panel
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-zinc-400 focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden bg-zinc-900 border-t border-purple-900/20 p-6 space-y-6">
        <a href="{{route('homePage')}}" class="block text-zinc-300 text-sm tracking-widest uppercase">Home</a>
        <a href="{{route('designPage')}}" class="block text-zinc-300 text-sm tracking-widest uppercase">Designs</a>
        <hr class="border-zinc-800">
         <a href="{{route('contactPage')}}" class="block text-purple-400 font-bold tracking-widest uppercase">Contact</a>
        <a href="{{route('aboutPage')}}" class="block text-purple-400 font-bold tracking-widest uppercase">About</a>
         <a href="{{route('adminHome')}}" class="block text-purple-400 font-bold tracking-widest uppercase">Admin Panel</a>
    </div>
</nav>