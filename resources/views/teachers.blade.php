@extends('layouts.main')

@section('contents')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Guru</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Guru</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Team / Teacher Section -->
    <section id="team" class="team section">
        <div class="container">

            <div class="row gy-4">

                @forelse ($teachers as $teacher)
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="team-member d-flex align-items-start">

                            {{-- FOTO --}}
                            <div class="pic">
                                @if ($teacher->foto)
                                    <img src="{{ asset('storage/' . $teacher->foto) }}" class="img-fluid"
                                        alt="{{ $teacher->nama }}">
                                @else
                                    <img src="{{ asset('assets/img/default-user.png') }}" class="img-fluid"
                                        alt="Default Foto">
                                @endif
                            </div>

                            {{-- INFO --}}
                            <div class="member-info">
                                <h4>{{ $teacher->nama }}</h4>
                                <span>{{ $teacher->jabatan }}</span>


                                {{-- KONTAK --}}
                                <div class="teacher-contact d-flex flex-column gap-1 mt-2">

                                    @if ($teacher->email)
                                        <span>
                                            <i class="bi bi-envelope me-2"></i>
                                            <a href="mailto:{{ $teacher->email }}">
                                                {{ $teacher->email }}
                                            </a>
                                        </span>
                                    @endif

                                    @if ($teacher->no_telp)
                                        <span>
                                            <i class="bi bi-whatsapp me-2"></i>
                                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $teacher->no_telp) }}"
                                                target="_blank">
                                                {{ $teacher->no_telp }}
                                            </a>
                                        </span>
                                    @endif

                                </div>

                            </div>

                        </div>
                    </div>
                @empty
                    {{-- EMPTY STATE --}}
                    <div class="col-12">
                        <div class="text-center p-5 bg-light rounded">
                            <i class="bi bi-people display-4 text-muted mb-3"></i>
                            <h4>Data Guru Belum Tersedia</h4>
                            <p class="text-muted mb-0">
                                Data guru akan ditampilkan setelah tersedia.
                            </p>
                        </div>
                    </div>
                @endforelse

            </div>

        </div>
    </section>
    <!-- /Team Section -->
@endsection

@section('scripts')
@endsection
