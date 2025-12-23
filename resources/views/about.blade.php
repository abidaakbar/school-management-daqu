@extends('layouts.main')

@section('contents')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Profil Sekolah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Profil Sekolah</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Profil Singkat Section -->
    <section id="profile" class="about section">
        <div class="container">
            <div class="row gy-4 align-items-center">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p class="who-we-are">Profil Singkat</p>
                    <h3>Pesantren Tahfiz Daarul Quran Ketapang</h3>

                    <p class="fst-italic">
                        Pesantren Tahfiz Daarul Quran Ketapang merupakan lembaga pendidikan Islam yang berfokus pada
                        pembinaan generasi Qurani melalui program tahfiz Al-Qur’an yang terintegrasi dengan pendidikan
                        formal dan pembentukan karakter Islami.
                    </p>

                    <p>
                        Dengan lingkungan yang kondusif, tenaga pendidik yang kompeten, serta kurikulum yang terarah,
                        Pesantren Tahfiz Daarul Quran Ketapang berkomitmen mencetak santri yang tidak hanya unggul dalam
                        hafalan Al-Qur’an, tetapi juga memiliki akhlak mulia, disiplin, serta kesiapan menghadapi
                        tantangan zaman.
                    </p>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/gedung-daqu.jpg') }}" class="img-fluid rounded" alt="Profil Sekolah">
                </div>

            </div>
        </div>
    </section>
    <!-- /Profil Singkat Section -->

    <!-- Visi & Misi Section -->
    <section id="vision-mission" class="section bg-light">
        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">
                <h2>Visi & Misi</h2>
                <p>Landasan dan arah pengembangan Pesantren Tahfiz Daarul Quran Ketapang</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>Visi</h4>
                    <p>
                        Melahirkan generasi pemimpin bangsa dan dunia yang saleh dan berkarakter Qur’ani serta berjiwa
                        entrepreneur dalam membangun peradaban Islam masa depan.
                    </p>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h4>Misi</h4>
                    <ul>
                        <li> Mewujudkan lembaga pendidikan berbasis Daqu Method (Iqomatul
                            Wajib wa Ihyaussunnah) yang unggul, kompetitip, global dan rahmatan lil alamin.</li>
                        <li> Mencetak generasi Qur’ani yang Mandiri, berjiwa Pemimpin,
                            Cerdas, Peka, Visioner dan berwawasan luas serta menjadikan Daqu Method sebagai pakaian
                            sehari-hari.</li>
                        <li> Mencetak generasi yang cinta bersedekah sepanjang hidup</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- /Visi & Misi Section -->

    <!-- Sejarah Section -->
    <section id="history" class="section">
        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">
                <h2>Sejarah Singkat</h2>
                <p>Perjalanan berdirinya Pesantren Tahfiz Daarul Quran Ketapang</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Pesantren Tahfiz Daarul Quran Ketapang didirikan sebagai wujud kepedulian terhadap pentingnya
                        pendidikan Al-Qur’an sejak usia dini hingga remaja. Berawal dari semangat untuk melahirkan
                        generasi yang dekat dengan Al-Qur’an, pesantren ini berkembang menjadi lembaga pendidikan yang
                        mengedepankan keseimbangan antara hafalan, pemahaman agama, dan pembinaan karakter.
                    </p>

                    <p>
                        Seiring berjalannya waktu, Pesantren Tahfiz Daarul Quran Ketapang terus melakukan pembenahan
                        dan pengembangan, baik dari sisi kurikulum, sarana prasarana, maupun kualitas sumber daya
                        manusia, guna menjawab kebutuhan pendidikan Islam yang relevan dengan perkembangan zaman.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- /Sejarah Section -->
@endsection

@section('scripts')
@endsection
