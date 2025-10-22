<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body {
                font-family: 'Segoe UI', Arial, sans-serif;
                background: #f7f7fa;
                margin: 0;
                padding: 0;
            }
            .navbar {
                background: #22223b;
                padding: 1rem;
                text-align: center;
            }
            .navbar a {
                color: #fff;
                background: #4a4e69;
                border: none;
                padding: 0.7rem 1.5rem;
                margin: 0 0.5rem;
                border-radius: 5px;
                text-decoration: none;
                font-size: 1rem;
                transition: background 0.2s;
            }
            .navbar a:hover {
                background: #9a8c98;
            }
            .container {
                max-width: 600px;
                margin: 2rem auto;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 8px rgba(0,0,0,0.07);
                padding: 2rem;
                text-align: center;
            }
        </style>

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script>


        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    </head>
    
    <body class="font-sans antialiased">


        <div class="navbar">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
