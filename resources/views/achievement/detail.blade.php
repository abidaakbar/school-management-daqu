@php
    use Carbon\Carbon;
@endphp

@extends('layouts.main')

@section('contents')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Prestasi Siswa</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('achievement') }}">Prestasi</a></li>
                    <li class="current">Detail Prestasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Achievement Details Section -->
                <section id="achievement-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            {{-- FOTO UTAMA --}}
                            @if ($achievement->foto1)
                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $achievement->foto1) }}"
                                        alt="{{ $achievement->achievement }}" class="img-fluid">
                                </div>
                            @endif

                            {{-- JUDUL PRESTASI --}}
                            <h2 class="title">
                                {{ $achievement->achievement }}
                            </h2>

                            {{-- META --}}
                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <span>{{ $achievement->student_name }}</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <time datetime="{{ $achievement->achievement_date }}">
                                            {{ Carbon::parse($achievement->achievement_date)->format('d M Y') }}
                                        </time>
                                    </li>
                                </ul>
                            </div>

                            {{-- KETERANGAN PRESTASI --}}
                            <div class="content">
                                {!! nl2br(e($achievement->keterangan)) !!}
                            </div>

                            {{-- FOTO TAMBAHAN --}}
                            @if ($achievement->foto2)
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <img src="{{ asset('storage/' . $achievement->foto2) }}" class="img-fluid mb-3"
                                            alt="Dokumentasi prestasi">
                                    </div>
                                </div>
                            @endif

                        </article>

                    </div>
                </section>
                <!-- /Achievement Details Section -->

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
