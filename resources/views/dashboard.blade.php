<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-black leading-tight">
           
        </h2>
    </x-slot>

    <!-- Latar belakang biru gradasi -->
    <div class="py-12 bg-gradient-to-r from-blue-500 to-blue-700 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Ucapan Selamat Datang -->
            <div class="text-center text-white mb-8">
                <h3 class="text-3xl font-semibold">Selamat Datang, {{ Auth::user()->name }}!</h3>
                <p class="mt-2 text-lg">Kamu berhasil login. Ayo mulai menjelajahi halaman dashboard ini.</p>
            </div>

            <!-- Fitur lainnya bisa ditambahkan di sini -->

        </div>
    </div>

    <!-- Inline CSS untuk menambahkan gradasi biru -->
    <style>
        .bg-gradient-to-r {
            background: linear-gradient(to right, #1E40AF, #3B82F6); /* Gradasi biru */
        }
    </style>
</x-app-layout>
