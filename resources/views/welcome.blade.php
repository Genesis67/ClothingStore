<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion By Sarah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f8f6f3] text-gray-800">

<!-- NAVBAR -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-semibold tracking-wide">Fashion By Sarah</h1>

        <nav class="space-x-6 text-sm font-medium">
            <a href="#" class="hover:text-gray-600">Home</a>
            <a href="#" class="hover:text-gray-600">Designs</a>
            <a href="#" class="hover:text-gray-600">About</a>
            <a href="#" class="hover:text-gray-600">Contact</a>
        </nav>
    </div>
</header>

<!-- HERO SECTION -->
<section class="relative">
    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">

        <!-- TEXT -->
        <div>
            <h2 class="text-4xl md:text-5xl font-light leading-tight mb-6">
                Custom Fashion<br>
                <span class="font-semibold">Made with Elegance</span>
            </h2>

            <p class="text-gray-600 mb-8">
                Bespoke designs crafted to fit your style, confidence, and occasion.
            </p>

            <div class="flex gap-4">
                <a href="#"
                   class="px-6 py-3 bg-gray-900 text-white rounded hover:bg-gray-700 transition">
                    View Designs
                </a>

                <a href="https://wa.me/2348012345678"
                   class="px-6 py-3 border border-gray-900 rounded hover:bg-gray-900 hover:text-white transition">
                    Contact on WhatsApp
                </a>
            </div>
        </div>

        <!-- IMAGE -->
        <div>
            <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38"
                 alt="Fashion model"
                 class="rounded-lg shadow-lg">
        </div>

    </div>
</section>

<!-- FEATURED DESIGNS -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <h3 class="text-3xl font-light text-center mb-4">
            Featured Designs
        </h3>

        <p class="text-center text-gray-600 mb-12">
            Discover our latest creations
        </p>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="bg-[#f8f6f3] rounded-lg overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38"
                     class="w-full h-80 object-cover">

                <div class="p-4 text-center">
                    <h4 class="font-medium">Ankara Evening Dress</h4>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="bg-[#f8f6f3] rounded-lg overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1593032465175-481ac7f401a0"
                     class="w-full h-80 object-cover">

                <div class="p-4 text-center">
                    <h4 class="font-medium">Bridal Gown</h4>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="bg-[#f8f6f3] rounded-lg overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1520975682031-ae99c6e99f1c"
                     class="w-full h-80 object-cover">

                <div class="p-4 text-center">
                    <h4 class="font-medium">Men’s Bespoke Suit</h4>
                </div>
            </div>

        </div>

        <div class="text-center mt-12">
            <a href="#"
               class="inline-block px-6 py-3 border border-gray-900 rounded hover:bg-gray-900 hover:text-white transition">
                Browse All Designs →
            </a>
        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 bg-[#f8f6f3]">
    <div class="max-w-3xl mx-auto text-center px-6">
        <h3 class="text-2xl mb-6">
            Have a question or want to place an order?
        </h3>

        <a href="https://wa.me/2348012345678"
           class="inline-block px-8 py-4 bg-green-600 text-white rounded hover:bg-green-500 transition">
            Message Us on WhatsApp
        </a>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-white border-t">
    <div class="max-w-7xl mx-auto px-6 py-8 flex justify-between items-center text-sm text-gray-600">
        <p>© {{ date('Y') }} Fashion By Sarah</p>

        <div class="space-x-4">
            <a href="#" class="hover:text-gray-800">Instagram</a>
            <a href="#" class="hover:text-gray-800">WhatsApp</a>
        </div>
    </div>
</footer>

</body>
</html>
