@extends('layouts.main')

@section('contents')
    <!-- Page Title -->
    <div class="page-title position-relative">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Berita</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Kategori</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-12">

                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">

                    <div class="container">
                        <div class="row gy-4">

                            @forelse ($news as $newsitem)
                                <div class="col-lg-4 ">
                                    <article class="position-relative h-100">

                                        <div class="post-img position-relative overflow-hidden">
                                            <img src="{{ asset('storage/' . $newsitem->foto1) }}" class="img-fluid"
                                                alt="">
                                            <span class="post-date">{{ $newsitem->published_at }}</span>
                                        </div>

                                        <div class="post-content d-flex flex-column">

                                            <h3 class="post-title">{{ $newsitem->title }}</h3>

                                            <p>
                                                {{ str($newsitem->content)->limit(150) }}
                                            </p>

                                            <hr>

                                            <a href="{{ route('news.show', $newsitem->id) }}"
                                                class="readmore stretched-link"><span>Read
                                                    More</span><i class="bi bi-arrow-right"></i></a>

                                        </div>

                                    </article>
                                </div><!-- End post list item -->
                            @empty
                                <div class="text-center p-5 bg-light rounded" data-aos="fade-up">
                                    <i class="bi bi-newspaper display-4 text-muted mb-3"></i>
                                    <h4 class="mt-3">Belum Ada Berita</h4>
                                    <p class="text-muted mb-0">
                                        Informasi dan berita terbaru belum tersedia saat ini.
                                        Silakan kunjungi kembali di lain waktu.
                                    </p>
                                </div>
                        </div>
                        @endforelse

                    </div>
            </div>

            </section><!-- /Blog Posts Section -->

            <!-- Blog Pagination Section -->
            <section id="blog-pagination" class="blog-pagination section">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <x-pagination :paginator="$news" />
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
@endsection
