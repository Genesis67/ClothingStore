<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fashion Website')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- for alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-zinc-50 antialiased">

    {{-- Navbar --}}
    @include('partials.navbar')
      @include('messages.error')
   
    {{-- Page Content --}}
    <main>
   
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
