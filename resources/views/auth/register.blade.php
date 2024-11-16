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
        <div class="card shadow-lg p-4" style="width: 30rem;">
            <h2 class="text-center mb-4">{{ __('Register an Account') }}</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Name')" class="form-label" />
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="text-danger mt-1" />
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" class="form-label" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" class="form-label" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label" />
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1" />
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a class="text-decoration-none" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="btn btn-primary">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
