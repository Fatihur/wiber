@extends('berandas.app')

@section('content')

<!-- About Page Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-3">Tentang WiraBerusaha</h1>
            <p>Platform inovatif untuk mahasiswa dan konsumen yang menghubungkan berbagai barang dan jasa dari himpunan-himpunan di Universitas Teknologi Sumbawa.</p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <h2 class="mb-4">Tentang WiraBerusaha</h2>
                <p class="mb-4">
                    WiraBerusaha merupakan sebuah wadah layanan yang membantu konsumen agar lebih praktis dalam mencari produk ataupun jasa yang tersedia di kawasan Universitas Teknologi Sumbawa. Kami juga mendukung organisasi maupun individu dalam lingkup mahasiswa yang memiliki usaha jasa maupun produk olahan, dan lainnya.
                </p>
                <p>
                    WiraBerusaha bertujuan untuk membantu konsumen dan produsen dalam mencari dan memasarkan produk yang disediakan secara efisien dan simpel. Kami berkomitmen untuk memanfaatkan teknologi dengan tepat dan bermanfaat.
                </p>
                <h2 class="mb-4">Misi Kami</h2>
                <p class="mb-4">
                    WiraBerusaha bertujuan untuk membantu konsumen dan produsen dalam mencari dan memasarkan produk yang disediakan secara efisien dan simpel. Kami berkomitmen untuk memanfaatkan teknologi dengan tepat dan bermanfaat.
                </p>
                <h2 class="mb-4">Layanan Kami</h2>
                <p>
                    Kami menawarkan berbagai produk dan jasa dari himpunan-himpunan yang ada di Universitas Teknologi Sumbawa. Mulai dari produk organik, jasa kreatif, hingga layanan akademis, semuanya bisa ditemukan di platform kami.
                </p>
                <div class="text-center mt-4">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url('/') }}">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Page End -->

@endsection
