@extends('berandas.app')

@section('content')
    <!-- Spinner Start -->



       <!-- Page Header Start -->
       <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Produk</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Produk</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Produk</h1>
                        <p>Jelajahi produk yang anda inginkan dari himpunan-himpunan                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 {{ $selectedCategory == 'all' || $selectedCategory == '' ? 'active' : '' }}" data-category="all" href="#">Semua Kategori</a>
                        </li>
                        @foreach ($kategoris as $item)
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 {{ $selectedCategory == $item->id ? 'active' : '' }}" data-category="{{ $item->id }}" href="#">{{$item->kategori}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($produks as $item)
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <img class="img-thumbnail" style="height: 300px; width: 100%"
                                                src="{{ asset('storage/'.$item->gambar) }}"
                                                "
                                                alt="">
                                            <div
                                                class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                {{ $item->himpunan->himpunan }}</div>
                                        </div>
                                        <div class="text-center p-4">
                                            <a class="d-block h5 mb-2" href="">{{ $item->judul }}</a>
                                            <span class="text-primary me-1">Rp {{ $item->harga }}</span>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="w-50 text-center border-end py-2">
                                                <a class="text-body" href="{{route('beranda-produk.show', $item->id)}}"><i
                                                        class="fa fa-eye text-primary me-2"></i>Detail</a>
                                            </small>
                                            <small class="w-50 text-center py-2">
                                                <a class="text-body" target="_blank"
                                                    href="https://wa.me/{{ $item->himpunan->wa }}?text=Halo, saya tertarik dengan produk  *{{ $item->judul }}*. Bagaimana cara saya memesan?">
                                                    <i class="fab fa-whatsapp text-primary me-2"></i>Hubungi
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $produks->links() }}
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->









        <!-- JavaScript Libraries -->
    @endsection
