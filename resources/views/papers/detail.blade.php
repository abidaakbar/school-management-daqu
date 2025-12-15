@php
    use Carbon\Carbon;
@endphp

@extends('layouts.main')

@section('contents')
    <!-- Page Title -->
    <div class="page-title position-relative">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Detail Artikel Ilmiah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('papers') }}">Karya Tulis</a></li>
                    <li class="current">Detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Paper Detail Section -->
                <section id="paper-detail" class="section">
                    <div class="container">

                        <article class="paper-article p-4 p-md-5 border rounded">

                            {{-- TITLE --}}
                            <h2 class="mb-3">
                                {{ $paper->title }}
                            </h2>

                            {{-- META --}}
                            <div class="mb-4 text-muted">
                                <span class="me-3">
                                    <i class="bi bi-person"></i>
                                    {{ $paper->author }}
                                </span>
                                <span>
                                    <i class="bi bi-calendar-event"></i>
                                    {{ Carbon::parse($paper->published_at)->format('d M Y') }}
                                </span>
                            </div>

                            {{-- ABSTRACT --}}
                            <div class="abstract mb-4">
                                <h5>Abstrak</h5>
                                <p class="text-justify">
                                    {!! nl2br(e($paper->abstract)) !!}
                                </p>
                            </div>

                            {{-- ACTIONS --}}
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ asset('storage/' . $paper->pdf_path) }}" target="_blank"
                                    class="btn btn-primary">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    Unduh PDF
                                </a>

                                <a href="{{ route('papers') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left"></i>
                                    Kembali ke Daftar Artikel
                                </a>
                            </div>

                        </article>

                    </div>
                </section>
                <!-- /Paper Detail Section -->

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
