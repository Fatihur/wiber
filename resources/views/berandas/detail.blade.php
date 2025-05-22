@extends('berandas.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ $produk->gambar ? \Storage::url($produk->gambar) : 'img/about.jpg' }}" alt="{{ $produk->judul }}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn align-items-start" data-wow-delay="0.5s">
                <a href="{{ route('beranda-produk.index') }}" class="col-lg-6 wow fadeIn" data-wow-delay="0.1s"><i class="fa fa-arrow-left"></i></a>
                <h1 class="display-5 mb-4">{{ $produk->judul }}</h1>
                <p class="mb-4 text-primary">{{ $produk->himpunan->himpunan}}</p>
                <p class="mb-4 fw-bold">Rp. {{ number_format($produk->harga) }}</p>
                <p class="mb-4">{!! $produk->deskripsi !!}</p>

                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" target="_blank" href="https://wa.me/{{ $produk->himpunan->wa }}?text=Halo, saya tertarik dengan produk *{{ $produk->judul }}*. Bagaimana cara saya memesan?">Hubungi via WhatsApp</a>
                <p class="alert alert-info mt-4"> jika anda menggunakan WhatsApp versi web, silakan chat manual melalui Nomer Whatsapp <b>{{ $produk->himpunan->wa }}</b></p>
            </div>
        </div>
    </div>
</div>
@endsection
