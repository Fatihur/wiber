@extends('berandas.app')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('beranda-template/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">WiraBerusaha: Efisiensi dalam Pencarian Produk dan Jasa</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('beranda-template/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">Platform untuk Mahasiswa dan Konsumen</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('beranda-template/img/about.jpg') }}" alt="About Image">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-5 mb-4">Tentang WiraBerusaha</h1>
                <p class="mb-4">
                    WiraBerusaha merupakan sebuah wadah layanan yang membantu konsumen agar lebih praktis
                    dalam mencari produk ataupun jasa yang tersedia di kawasan Universitas Teknologi Sumbawa.
                    Kami juga mendukung organisasi maupun individu dalam lingkup mahasiswa yang memiliki
                    usaha jasa maupun produk olahan, dan lainnya.
                </p>
                <p>
                    WiraBerusaha bertujuan untuk membantu konsumen dan produsen dalam mencari dan
                    memasarkan produk yang disediakan secara efisien dan simpel. Kami berkomitmen untuk
                    memanfaatkan teknologi dengan tepat dan bermanfaat.
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="/tentang">Baca Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon my-5 py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Fitur Kami</h1>
            <p>Temukan berbagai fitur yang memudahkan Anda dalam mencari dan memasarkan produk dan jasa dari himpunan-himpunan yang ada di Universitas Teknologi Sumbawa.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('beranda-template/img/icon-1.png') }}" alt="">
                    <h4 class="mb-3">Lengkap</h4>
                    <p>Kami menawarkan berbagai produk dan jasa dari himpunan-himpunan yang ada di Universitas Teknologi Sumbawa.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('beranda-template/img/icon-2.png') }}" alt="">
                    <h4 class="mb3">Mudah</h4>
                    <p>Platform kami dirancang untuk kemudahan akses dalam mencari dan memasarkan produk dan jasa.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('beranda-template/img/icon-3.png') }}" alt="">
                    <h4 class="mb-3">Efisien</h4>
                    <p>Kami memastikan proses pencarian dan pemasaran berjalan dengan efisien dan tepat sasaran.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Firm Visit Start -->
<!-- Register Your Product Start -->
<div class="container-fluid bg-primary bg-icon mt-5 py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-5 text-white mb-3">Daftarkan Produkmu</h1>
                <p class="text-white mb-0">
                    Apakah Anda memiliki produk atau jasa yang ingin dipasarkan? Daftarkan produk Anda di WiraBerusaha dan dapatkan akses ke konsumen di Universitas Teknologi Sumbawa dan sekitarnya.
                </p>
            </div>
            <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="https://wa.me/6282147565186?text=Halo, saya ingin mendaftarkan produk saya, bagaimana caranya?" target="_blank">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</div>
<!-- Register Your Product End -->
<!-- Firm Visit End -->

@endsection
