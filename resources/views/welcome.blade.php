<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK INFORMATIKA PESAT</title>
    <link href="/build/assets/app.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-100 via-pink-50 to-yellow-50 min-h-screen font-sans">
    <nav class="flex justify-between items-center px-8 py-4 bg-white shadow-lg sticky top-0 z-50 rounded-b-2xl animate-fade-in-down">
        <div class="text-2xl font-extrabold text-blue-800 tracking-wide flex items-center gap-2">
            <span class="bg-gradient-to-r from-pink-500 to-blue-500 text-white px-3 py-1 rounded-lg shadow">SMK</span>
            INFORMATIKA PESAT
        </div>
        <ul class="flex gap-8 text-lg font-medium">
            <li><a href="/" class="text-pink-600 border-b-2 border-pink-600">Beranda</a></li>
            <li><a href="/profil-sekolah" class="hover:text-blue-600 transition">Profil Sekolah</a></li>
            <li><a href="/ekstrakurikuler" class="hover:text-green-600 transition">Ekstrakurikuler</a></li>
            <li><a href="/galeri" class="hover:text-yellow-600 transition">Galeri</a></li>
        </ul>
    </nav>
    <header class="max-w-5xl mx-auto mt-10 text-center animate-fade-in-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-4 drop-shadow-lg">Selamat Datang di <span class="text-pink-600">SMK INFORMATIKA PESAT</span></h1>
        <p class="text-lg text-gray-700 mb-8">Sekolah unggulan di bidang teknologi dan inovasi, membentuk generasi masa depan yang kreatif dan berdaya saing global.</p>
        <div class="flex flex-col md:flex-row gap-6 justify-center items-center mb-8">
            <div class="bg-white rounded-2xl shadow-xl px-8 py-6 flex flex-col items-center hover:scale-105 transition-transform">
                <span class="text-3xl font-bold text-blue-700">35</span>
                <span class="text-gray-600">Guru</span>
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-6 flex flex-col items-center hover:scale-105 transition-transform">
                <span class="text-3xl font-bold text-pink-700">420</span>
                <span class="text-gray-600">Siswa</span>
            </div>
        </div>
    </header>
    <main class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 animate-fade-in-up">
        <!-- News Feed -->
        <section class="md:col-span-2 bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-blue-800 mb-6 flex items-center gap-2"><svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h4l2-2 2 2h4a2 2 0 012 2v12a2 2 0 01-2 2z"/></svg>Berita & Kegiatan</h2>
            <ul class="space-y-6">
                <li class="flex gap-4 items-start bg-blue-50 rounded-xl p-4 shadow hover:scale-105 transition-transform">
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=100&q=80" alt="Kegiatan 1" class="rounded-lg w-24 h-24 object-cover">
                    <div>
                        <h3 class="font-semibold text-lg text-blue-900">Lomba Karya Ilmiah Remaja Nasional</h3>
                        <p class="text-gray-700">Tim SMK INFORMATIKA PESAT meraih juara 1 dalam lomba KIR tingkat nasional dengan inovasi aplikasi edukasi berbasis AI.</p>
                        <span class="text-xs text-gray-400">12 Mei 2024</span>
                    </div>
                </li>
                <li class="flex gap-4 items-start bg-pink-50 rounded-xl p-4 shadow hover:scale-105 transition-transform">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=100&q=80" alt="Kegiatan 2" class="rounded-lg w-24 h-24 object-cover">
                    <div>
                        <h3 class="font-semibold text-lg text-pink-900">Pentas Seni Musik & Tari</h3>
                        <p class="text-gray-700">Siswa menampilkan pertunjukan seni musik dan tari tradisional dalam acara peringatan Hari Pendidikan Nasional.</p>
                        <span class="text-xs text-gray-400">2 Mei 2024</span>
                    </div>
                </li>
                <li class="flex gap-4 items-start bg-yellow-50 rounded-xl p-4 shadow hover:scale-105 transition-transform">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=100&q=80" alt="Kegiatan 3" class="rounded-lg w-24 h-24 object-cover">
                    <div>
                        <h3 class="font-semibold text-lg text-yellow-900">Juara Futsal Antar Sekolah</h3>
                        <p class="text-gray-700">Tim futsal SMK INFORMATIKA PESAT berhasil meraih juara 2 dalam turnamen futsal se-Kota Teknologi.</p>
                        <span class="text-xs text-gray-400">20 April 2024</span>
                    </div>
                </li>
            </ul>
        </section>
        <!-- Gallery -->
        <aside class="bg-white rounded-2xl shadow-xl p-8 flex flex-col items-center">
            <h2 class="text-2xl font-bold text-pink-800 mb-6 flex items-center gap-2"><svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7"/><path stroke-linecap="round" stroke-linejoin="round" d="M21 7l-9 6-9-6"/></svg>Galeri</h2>
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=200&q=80" alt="Galeri 1" class="rounded-lg shadow-md w-32 h-24 object-cover hover:scale-110 transition-transform">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=200&q=80" alt="Galeri 2" class="rounded-lg shadow-md w-32 h-24 object-cover hover:scale-110 transition-transform">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=200&q=80" alt="Galeri 3" class="rounded-lg shadow-md w-32 h-24 object-cover hover:scale-110 transition-transform">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=200&q=80" alt="Galeri 4" class="rounded-lg shadow-md w-32 h-24 object-cover hover:scale-110 transition-transform">
            </div>
            <a href="/galeri" class="mt-6 inline-block bg-gradient-to-r from-pink-500 to-blue-500 text-white px-6 py-2 rounded-full shadow hover:scale-105 transition-transform font-semibold">Lihat Semua</a>
        </aside>
    </main>
    <footer class="mt-16 py-8 text-center text-gray-500 text-sm">
        &copy; 2024 SMK INFORMATIKA PESAT. All rights reserved.
    </footer>
    <style>
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-down {
            animation: fade-in-down 0.8s cubic-bezier(0.4,0,0.2,1) both;
        }
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s cubic-bezier(0.4,0,0.2,1) both;
        }
    </style>
</body>
</html>
