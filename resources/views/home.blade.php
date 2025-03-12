@extends('layouts.main')

@section('content')
    <!-- Profil Sekolah -->
    <section id="profile" class="text-center py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-blue-900 mb-6">Profil Sekolah</h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                SMP-SMA Daarul Qur'an adalah institusi pendidikan yang berdedikasi tinggi untuk mencetak generasi penerus
                bangsa
                yang berintegritas dan kompeten. Berdiri sejak 2007, kami menyediakan berbagai fasilitas untuk mendukung
                pembelajaran yang berkesan dan berkualitas.
            </p>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section id="news" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-blue-900 mb-8">Berita Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($news as $item)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="{{ asset('storage/' . $item->foto1) }}" alt="Berita"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="font-semibold text-xl text-blue-900">{{ $item->title }}</h3>
                            <p class="text-gray-600 mt-2">{{ Str::limit($item->content, 100) }}</p>
                            <a href="#" class="text-blue-500 hover:text-blue-700 mt-4 inline-block font-semibold">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Galeri Ekstrakurikuler -->
    <section id="gallery" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-blue-900 mb-8">Ekstrakurikuler</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Contoh Galeri Ekstrakurikuler -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <img src="{{ asset('images/ekstra1.jpg') }}" alt="Basket"
                        class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-lg text-blue-900">Basket</h3>
                    </div>
                </div>
                <!-- Tambahkan item galeri lainnya di sini -->
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-blue-900 mb-6">Hubungi Kami</h2>
            <p class="text-gray-600 text-lg">
                Untuk informasi lebih lanjut, Anda dapat menghubungi kami di nomor berikut:
                <span class="font-semibold text-blue-900">081234567890</span>
            </p>
        </div>
    </section>
@endsection
