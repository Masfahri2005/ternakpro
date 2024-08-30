<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ '/awal' }}" class="text-gray-800 dark:text-gray-200">{{ __('Dasbor TernakPro') }}</a>
        </h2>
    </x-slot> --}}

    <div class="py-12 bg-gradient-to-r from-blue-600 via-blue-400 to-blue-300">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-black">
                    {{ __('Selamat Datang, ') . Auth::user()->name }} <!-- Menampilkan nama pengguna -->
                </h2>
            </div>

            <div class="flex flex-col items-center space-y-8">
                <div class="card w-full max-w-lg mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center text-gray-800 dark:text-gray-100">
                            {{ __("Selamat Anda Berhasil Login") }}
                        </h5>
                        <p class="card-text text-center text-gray-700 dark:text-gray-200">
                            {{ __("Silahkan Logout di menu user !!") }}
                        </p>
                    </div>
                </div>
                <div class="card w-full max-w-lg mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center text-gray-800 dark:text-gray-100">
                            {{ __("Logout dan Login Kembali") }}
                        </h5>
                        <p class="card-text text-center text-gray-700 dark:text-gray-200">
                            {{ __("Setelah Logout, silahkan login kembali dengan akun yang baru anda buat !!") }}
                        </p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>



<style>
   .card {
    background-color: #FFC107; /* Warna kuning */
    border: 1px solid #FFB300; /* Border kuning gelap untuk tampilan yang lebih tajam */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-body {
    padding: 2rem;
}

.card-title {
    font-size: 1.5rem; /* Ukuran font untuk judul */
    font-weight: 700; /* Berat font yang lebih bold */
    color: #333;
}

.card-text {
    font-size: 1.125rem; /* Ukuran font untuk teks */
    color: #555;
}

.container {
    max-width: 960px;
}

.text-4xl {
    font-size: 2.25rem; /* Ukuran font untuk judul utama */
    font-weight: 800; /* Berat font yang lebih tebal untuk teks utama */
}

.max-w-lg {
    max-width: 800px; /* Lebar maksimal untuk kartu */
}

</style>