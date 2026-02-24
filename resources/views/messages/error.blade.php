<div class="fixed top-5 right-5 z-50 flex flex-col gap-3 w-full max-w-sm">
    
    {{-- Success Message --}}
    @if (session('success'))
        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 5000)" 
            x-show="show" 
            x-transition
            class="flex items-center p-4 text-green-800 rounded-lg bg-green-50 border border-green-200 shadow-lg"
        >
            <div class="text-sm font-medium">
                {{ session('success') }}
            </div>
            <button @click="show = false" class="ms-auto text-green-500 hover:text-green-700 font-bold">×</button>
        </div>
    @endif

    {{-- Error Messages --}}
    @if ($errors->any())
        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 8000)" 
            x-show="show" 
            x-transition
            class="p-4 text-red-800 rounded-lg bg-red-50 border border-red-200 shadow-lg"
        >
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm font-bold">Whoops! Errors found:</span>
                <button @click="show = false" class="text-red-500 hover:text-red-700 font-bold">×</button>
            </div>
            <ul class="list-disc list-inside text-xs space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>