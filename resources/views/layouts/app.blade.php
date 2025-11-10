<!DOCTYPE html>
<html lang="it" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyMovies 🎬')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body { padding-bottom: 80px; }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: var(--bs-primary);
            color: white;
            text-align: center;
            padding: 1rem 0;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }
        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: all 0.2s ease-in-out;
            font-size: 1.3rem;
        }
        footer a:hover {
            color: #ffc107;
            transform: scale(1.2);
        }
    </style>
</head>
<body class="bg-body-tertiary">

    @include('layouts.header')

    <main class="container pb-5">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>
