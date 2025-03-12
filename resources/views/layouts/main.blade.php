<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP-SMA Daarul Qur'an</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal">
    <!-- Header -->
    <header class="bg-blue-900 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-3xl font-bold">
                SMP-SMA <span class="text-yellow-400">Daarul Qur'an</span>
            </h1>
            <nav class="hidden md:flex space-x-6">
                <a href="#profile" class="hover:text-yellow-400 transition">Profil</a>
                <a href="#news" class="hover:text-yellow-400 transition">Berita</a>
                <a href="#gallery" class="hover:text-yellow-400 transition">Galeri</a>
                <a href="#contact" class="hover:text-yellow-400 transition">Kontak</a>
            </nav>
            <!-- Mobile Menu -->
            <button id="menu-toggle" class="md:hidden text-yellow-400 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="hidden bg-blue-800 text-white md:hidden">
            <a href="#profile" class="block px-4 py-2 hover:bg-blue-700">Profil</a>
            <a href="#news" class="block px-4 py-2 hover:bg-blue-700">Berita</a>
            <a href="#gallery" class="block px-4 py-2 hover:bg-blue-700">Galeri</a>
            <a href="#contact" class="block px-4 py-2 hover:bg-blue-700">Kontak</a>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <div id="profile" class="mb-12">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Profil Sekolah</h2>
            <p class="text-gray-700 leading-relaxed">
                SMP-SMA Daarul Qur'an adalah lembaga pendidikan yang berkomitmen membangun generasi Qur'ani melalui
                pendidikan berkualitas, berbasis Al-Qur'an dan teknologi.
            </p>
        </div>
        <div id="news" class="mb-12">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Berita</h2>
            <p class="text-gray-700 leading-relaxed">Berita terbaru dari kegiatan dan pencapaian sekolah kami.</p>
        </div>
        <div id="gallery" class="mb-12">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Galeri</h2>
            <p class="text-gray-700 leading-relaxed">Lihat foto-foto kegiatan kami di galeri berikut.</p>
        </div>
        <div id="contact">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Kontak</h2>
            <p class="text-gray-700 leading
