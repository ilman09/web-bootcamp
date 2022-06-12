@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>KawanKarir</title>
</head>

<body>

    <section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                BELAJAR DARI AHLINYA
                            </p>
                            <h1 class="header">
                                Pilih <span class="text-blue">Bootcamp</span>mu Untuk Kembangkan <span class="text-blue">Karir</span>mu
                            </h1>
                            <p class="support">
                            <span class="text-blue">KawanKarir</span> membantu masyarakat dengan bootcamp untuk <br> memperdalam soft skills dan mengimprove diri.
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Mulai Sekarang
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/banner.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brands">
                <div class="col-lg-12 col-12 text-center">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        KEUNTUNGAN BELAJAR DI <span class="text-blue">KawanKarir</span>
                    </p>
                    <h2 class="primary-header">
                        Belajar Lebih Cepat dan Lebih Baik
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Diversity
                        </h3>
                        <p class="support">
                            Belajar dari siapa pun di seluruh <br> dunia dan dapatkan keterampilan baru
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-1.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Guideline
                        </h3>
                        <p class="support">
                            <span class="text-blue">KawanKarir</span> akan membantu memilih <br> karir apa yang cocok untukmu
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-2.png')}}" class="icon" alt="">
                        <h3 class="title">
                            1-1 Mentoring
                        </h3>
                        <p class="support">
                            Kami akan memastikan bahwa <br> anda akan mendapatkan apa <br> yang benar-benar anda butuhkan
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-3.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Future Job
                        </h3>
                        <p class="support">
                            Perdalam soft skills kita untuk <br> mendapatkan pekerjaan di <br> perusahaan besar
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step1.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        KARIR YANG LEBIH BAIK
                    </p>
                    <h2 class="primary-header">
                        Persiapkan Perjalananmu
                    </h2>
                    <p class="support">
                        Kami benar-benar peduli dengan karir masa depan siswa kami <br> jadi akan lebih baik jika Anda mengambil wawancara singkat
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Lebih Lanjut
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                        BELAJAR SUNGGUH-SUNGGUH
                    </p>
                    <h2 class="primary-header">
                        Selesaikan Proyek
                    </h2>
                    <p class="support">
                        Anda masing-masing akan bergabung dengan grup pribadi <br> dan juga bekerja sama dengan anggota tim dalam proyek
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Lihat Demo
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step2.png')}}" class="cover" alt="">
                </div>

            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step3.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        PROYEK AKHIR
                    </p>
                    <h2 class="primary-header">
                        Hari Presentasi
                    </h2>
                    <p class="support">
                        Pelajari cara berbicara di depan umum untuk mendemonstrasikan <br> project dan menerima feedback
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Showcase
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        INVESTASI TERBAIK ADALAH WAKTU
                    </p>
                    <h2 class="primary-header text-white">
                        Mulai Karirmu
                    </h2>
                    <p class="support">
                        Kami memiliki beberapa bootcamp dasar bahasa <br> pemrograman dan semuanya <span class="story">GRATIS</span>
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            Lihat Syllabus
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    GILA CODING
                                </p>
                                <h1 class="price text-center">
                                    $280K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Pro Techstack Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        iMac Pro 2021 & Display
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Premium Design Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Website Builder
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'gila-coding')}}" class="btn btn-master btn-secondary w-100 mt-3">
                                        Mulai Kelas Ini
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    BARU MULAI
                                </p>
                                <h1 class="price text-center">
                                    $140K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'baru-mulai')}}" class="btn btn-master btn-secondary w-100 mt-3">
                                        Mulai Kelas Ini
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-70">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{asset('images/brands.png')}}" height="30" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        SUCCESS STUDENTS
                    </p>
                    <h2 class="primary-header">
                        We Really Love Bootcamp
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Mentornya keren menyampaikan setiap materinya juga detail dan mudah dipahami.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/anesa.png')}}" class="photo rounded-circle" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Anesa
                                        </h4>
                                        <p class="role">
                                            Developer at Google
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Kelas yang paling recommended pokoknya buat investasi ilmu di era revolusi industri 4.0.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/dar.png')}}" class="photo rounded-circle" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Ilman
                                        </h4>
                                        <p class="role">
                                            CEO at KawanKarir
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Kelas yang sangat bermanfaat dan ilmu up to-date dan yang paling penting biayanya terjangkau.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/fonia.png')}}" class="photo rounded-circle" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Fonia
                                        </h4>
                                        <p class="role">
                                            QA at Facebook
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>


@endsection
