@extends('layouts.main')

@section('contents')
    <!-- Slider Section -->
    <section id="slider" class="slider section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">

                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

                <div class="swiper-wrapper">

                    @foreach ($sliders as $slider)
                        <div class="swiper-slide" style="background-image: url('{{ asset($slider['image']) }}');">
                            <div class="content">
                                <h2>
                                    @if ($slider['link'])
                                        <a href="{{ $slider['link'] }}">{{ $slider['title'] }}</a>
                                    @else
                                        {{ $slider['title'] }}
                                    @endif
                                </h2>
                                <p>{{ $slider['subtitle'] }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>


                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Slider Section -->

    <section class="section">
        <div class="container">

            <div class="section-title-container d-flex justify-content-between align-items-center mb-4">
                <h2>Berita Terbaru</h2>
                <a href="{{ route('news') }}">Lihat Semua</a>
            </div>

            <div class="row gy-4">
                @forelse ($latestNews as $news)
                    <div class="col-lg-4">
                        <article class="post-entry h-100">
                            <img src="{{ asset('storage/' . $news->foto1) }}" class="img-fluid mb-3" alt="">
                            <div class="post-meta mb-1">
                                {{ \Carbon\Carbon::parse($news->published_at)->format('d M Y') }}
                            </div>
                            <h4>
                                <a href="{{ route('news.show', $news->id) }}">
                                    {{ $news->title }}
                                </a>
                            </h4>
                            <p>{{ str($news->content)->limit(120) }}</p>
                        </article>
                    </div>
                @empty
                    <p class="text-muted">Belum ada berita.</p>
                @endforelse
            </div>

        </div>
    </section>


    <section class="section bg-light">
        <div class="container">

            <div class="section-title-container d-flex justify-content-between align-items-center mb-4">
                <h2>Prestasi & Penghargaan</h2>
                <a href="{{ route('achievement') }}">Lihat Semua</a>
            </div>

            <div class="row gy-4">
                @forelse ($latestAchievements as $achievement)
                    <div class="col-lg-4">
                        <div class="post-entry h-100">
                            <img src="{{ asset('storage/' . $achievement->foto1) }}" class="img-fluid mb-3" alt="">
                            <h4>
                                <a href="{{ route('achievement.show', $achievement->id) }}">
                                    {{ $achievement->achievement }}
                                </a>
                            </h4>
                            <p class="text-muted mb-1">
                                {{ $achievement->student_name }}
                            </p>
                            <p>{{ str($achievement->keterangan)->limit(120) }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada prestasi.</p>
                @endforelse
            </div>

        </div>
    </section>


    <section class="section">
        <div class="container">

            <div class="section-title-container d-flex justify-content-between align-items-center mb-4">
                <h2>Karya Tulis & Artikel Ilmiah</h2>
                <a href="{{ route('papers') }}">Lihat Semua</a>
            </div>

            @forelse ($latestPapers as $paper)
                <div class="paper-item mb-4 p-4 border rounded">
                    <h4>
                        <a href="{{ route('papers.show', $paper->id) }}">
                            {{ $paper->title }}
                        </a>
                    </h4>

                    <p class="text-muted mb-2">
                        <i class="bi bi-person"></i> {{ $paper->author }}
                        &nbsp; | &nbsp;
                        <i class="bi bi-calendar-event"></i>
                        {{ \Carbon\Carbon::parse($paper->published_at)->format('Y') }}
                    </p>

                    <p>{{ str($paper->abstract)->limit(200) }}</p>
                </div>
            @empty
                <p class="text-muted">Belum ada artikel.</p>
            @endforelse

        </div>
    </section>
@endsection

@section('scripts')
@endsection
