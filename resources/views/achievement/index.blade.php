@extends('layouts.main')

@section('contents')
    <!-- Page Title -->
    <div class="page-title position-relative">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Prestasi Siswa</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Prestasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Achievement Posts Section -->
                <section id="achievement-posts" class="blog-posts section">
                    <div class="container">
                        <div class="row gy-4">

                            @forelse ($achievements as $item)
                                <div class="col-lg-4">
                                    <article class="position-relative h-100">

                                        {{-- FOTO --}}
                                        <div class="post-img position-relative overflow-hidden">
                                            <img src="{{ asset('storage/' . $item->foto1) }}" class="img-fluid"
                                                alt="{{ $item->achievement }}">
                                            <span class="post-date">
                                                {{ \Carbon\Carbon::parse($item->achievement_date)->format('d M Y') }}
                                            </span>
                                        </div>

                                        {{-- CONTENT --}}
                                        <div class="post-content d-flex flex-column">

                                            <h3 class="post-title">
                                                {{ $item->achievement }}
                                            </h3>

                                            <p class="mb-1">
                                                <strong>Nama Siswa:</strong> {{ $item->student_name }}
                                            </p>

                                            <p>
                                                {{ str($item->keterangan)->limit(120) }}
                                            </p>

                                            <hr>


                                            <a href="{{ route('achievement.show', $item->id) }}"
                                                class="readmore stretched-link">
                                                <span>Detail Prestasi</span>
                                                <i class="bi bi-arrow-right"></i>
                                            </a>

                                        </div>

                                    </article>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="text-center p-5 bg-light rounded" data-aos="fade-up">
                                        <i class="bi bi-award display-4 text-muted mb-3"></i>
                                        <h4 class="mt-3">Belum Ada Data Prestasi</h4>
                                        <p class="text-muted mb-0">
                                            Data prestasi siswa belum tersedia saat ini.
                                            Silakan kembali lagi di lain waktu.
                                        </p>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </section>
                <!-- /Achievement Posts Section -->

                <!-- Pagination -->
                <section id="achievement-pagination" class="blog-pagination section">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <x-pagination :paginator="$achievements" />
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
