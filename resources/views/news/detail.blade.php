@php
    use Carbon\Carbon;
@endphp
@extends('layouts.main')

@section('contents')
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Berita</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="current">Berita</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            {{-- FOTO UTAMA --}}
                            @if ($news->foto1)
                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $news->foto1) }}" alt="{{ $news->title }}"
                                        class="img-fluid">
                                </div>
                            @endif

                            {{-- JUDUL --}}
                            <h2 class="title">
                                {{ $news->title }}
                            </h2>

                            {{-- META --}}
                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <span>Admin</span>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <time datetime="{{ $news->published_at }}">
                                            {{ Carbon::parse($news->published_at)->format('d M Y') }}
                                        </time>
                                    </li>
                                </ul>
                            </div>

                            {{-- KONTEN --}}
                            <div class="content">
                                {!! nl2br(e($news->content)) !!}
                            </div>

                            {{-- FOTO TAMBAHAN --}}
                            @if ($news->foto2 || $news->foto3)
                                <div class="row mt-4">
                                    @if ($news->foto2)
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/' . $news->foto2) }}" class="img-fluid mb-3"
                                                alt="Foto berita">
                                        </div>
                                    @endif

                                    @if ($news->foto3)
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/' . $news->foto3) }}" class="img-fluid mb-3"
                                                alt="Foto berita">
                                        </div>
                                    @endif
                                </div>
                            @endif

                        </article>

                    </div>
                </section>
                <!-- /Blog Details Section -->

            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
