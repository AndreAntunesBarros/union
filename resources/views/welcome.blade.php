<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-white dark:bg-gray-800 shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="text-xl font-bold text-gray-800 dark:text-white">{{ config('app.name') }}</div>

            @if (Route::has('login'))
                <nav>
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4">Home</a>
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4">Sobre</a>
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4">Contato</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4">Entrar</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4">Registrar</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="flex-grow container mx-auto py-10 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 text-center mt-10">
        &copy; {{ date('Y') }} {{ env('APP_NAME') }}. Todos os direitos reservados.
    </footer>

</body>
</html>
