<x-guest-layout>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #007bff; /* Warna biru untuk latar belakang */
        }

        .card {
            background-color: #ffffff; /* Warna putih untuk form */
            border-radius: 10px;
        }

        h2 {
            color: #007bff; /* Warna biru untuk judul */
        }

        .btn-primary {
            background-color: #0056b3; /* Biru lebih gelap untuk tombol */
            border: none;
        }

        .btn-primary:hover {
            background-color: #003d80; /* Warna hover untuk tombol */
        }

        .text-decoration-none {
            color: #0056b3; /* Warna biru untuk link */
        }

        .text-decoration-none:hover {
            color: #003d80; /* Warna hover untuk link */
        }
    </style>

    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-lg p-4" style="width: 24rem;">
            <h2 class="text-center mb-4">{{ __('Log in to your account') }}</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf  

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" class="form-label" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" class="form-label" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Link to Register -->
                    <a class="text-decoration-none" href="{{ route('register') }}">
                        {{ __('Registrasi di sini') }}
                    </a>

                    <x-primary-button class="btn btn-primary">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
