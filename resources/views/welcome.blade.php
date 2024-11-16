<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Inline Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Figtree', sans-serif;
            color: white;
            background: linear-gradient(135deg, #1e3a8a, #2563eb, #1e615e);
            background-size: 300% 300%;
            animation: gradientAnimation 8s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        nav {
            display: flex;
            justify-content: flex-end;
            background-color: rgba(0, 0, 0, 0.5); /* Transparan */
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            margin-left: 15px;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            font-weight: 500;
            border: 2px solid transparent;
            border-radius: 8px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            border-color: white;
        }

        .content {
            text-align: center;
            padding: 50px 20px;
        }

        .content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2rem;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    @if (Route::has('login'))
        <nav>
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </nav>
    @endif

    <div class="content">
        <h1>Welcome to websiteku</h1>
        <p>
            Please log in to access your dashboard or register to join our community!
        </p>
        
    </div>
</body>
</html>
