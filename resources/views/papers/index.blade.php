@php
    use Carbon\Carbon;
@endphp

@extends('layouts.main')

@section('contents')
    <!-- Page Title -->
    <div class="page-title position-relative">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Karya Tulis & Artikel Ilmiah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Karya Tulis</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Papers List Section -->
                <section id="papers-list" class="section">
                    <div class="container">

                        @forelse ($papers as $paper)
                            <div class="paper-item mb-4 p-4 border rounded" data-aos="fade-up">

                                {{-- TITLE --}}
                                <h4 class="mb-2">
                                    <a href="{{ route('papers.show', $paper->id) }}" class="text-decoration-none text-dark">
                                        {{ $paper->title }}
                                    </a>
                                </h4>

                                {{-- META --}}
                                <p class="text-muted mb-2">
                                    <i class="bi bi-person"></i> {{ $paper->author }}
                                    &nbsp; | &nbsp;
                                    <i class="bi bi-calendar-event"></i>
                                    {{ Carbon::parse($paper->published_at)->format('Y') }}
                                </p>

                                {{-- ABSTRACT --}}
                                <p class="mb-3">
                                    {{ str($paper->abstract)->limit(300) }}
                                </p>

                                {{-- ACTIONS --}}
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="{{ asset('storage/' . $paper->pdf_path) }}" target="_blank"
                                        class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                        Unduh PDF
                                    </a>

                                    <a href="{{ route('papers.show', $paper->id) }}"
                                        class="btn btn-link btn-sm text-decoration-none">
                                        Lihat Detail
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>

                            </div>
                        @empty
                            {{-- EMPTY STATE --}}
                            <div class="text-center p-5 bg-light rounded">
                                <i class="bi bi-journal-text display-4 text-muted mb-3"></i>
                                <h4>Belum Ada Karya Tulis</h4>
                                <p class="text-muted mb-0">
                                    Artikel dan karya tulis ilmiah belum tersedia saat ini.
                                </p>
                            </div>
                        @endforelse

                    </div>
                </section>
                <!-- /Papers List Section -->

                {{-- Pagination --}}
                @if ($papers->hasPages())
                    <section id="papers-pagination" class="blog-pagination section">
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <x-pagination :paginator="$papers" />
                            </div>
                        </div>
                    </section>
                @endif

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
