<footer class="bg-zinc-900 border-t border-white/5 mt-20">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
            
            <div class="text-zinc-500 text-[10px] tracking-[0.3em] uppercase order-2 md:order-1 text-center md:text-left">
                © {{ date('Y') }} Veeks Clothing
            </div>

            <div class="flex justify-center order-1 md:order-2">
                <img src="{{ asset('image/logo1.jpg') }}" class="h-12 w-auto opacity-80" alt="Logo">
            </div>

            <div class="flex justify-center md:justify-end space-x-6 order-3">
                <a href="#" class="text-zinc-400 hover:text-purple-400 transition text-xs tracking-widest uppercase">Instagram</a>
                <a href="#" class="text-zinc-400 hover:text-purple-400 transition text-xs tracking-widest uppercase">Facebook</a>
            </div>
        </div>
    </div>
</footer>