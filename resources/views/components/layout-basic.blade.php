<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('logo')
    <!-- Ini bagian favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/images/ift.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('storage/images/ift.png') }}" type="image/png">

    <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    @yield('navbar')

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @yield('footer')

</body>
</html>
