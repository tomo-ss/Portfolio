<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Monte Tavola</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('meta')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body id="app" class="@yield('body_class') bg-beige text-gray-800 font-sans">
    @include('partials.header')

<main class="min-h-screen">
    <div class="max-w-screen-xl mx-auto px-4">
        @yield('content')
    </div>
</main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>