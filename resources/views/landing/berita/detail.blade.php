@extends('layouts._default.guest')
@section('content')

<style>
   .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            transition: opacity 0.2s ease; /* Animasi perubahan opacity */
            opacity: 0; /* Panah menghilang ketika tidak didekati */
        }


        .carousel-control-prev-icon {
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="%23000" viewBox="0 0 16 16"%3E%3Cpath d="M4.646 8l4.646-4.646a.5.5 0 0 0-.708-.708L3.707 8l4.647 4.646a.5.5 0 0 0 .708-.708L4.646 8z"/%3E%3C/svg%3E');
  }

        .carousel-control-next-icon {
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="%23000" viewBox="0 0 16 16"%3E%3Cpath d="M11.354 8l-4.646 4.646a.5.5 0 0 1-.708-.708L10.293 8 6 3.707a.5.5 0 1 1 .708-.708L11.354 8z"/%3E%3C/svg%3E');
  }
</style>

<header class="bg-gradient-dark">
    <div class="page-header" style="height: 100px;">
        <span class="mask bg-gradient-dark opacity-6"></span>
    </div>
</header>


<section id="detail" class="py-5">
    <div class="container col-xxl-8">

        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/berita">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$berita->judul}}</li>
            </ol>
        </nav>

        <!-- Berita Image -->
        <div class="text-center mb-4">
            <img src="{{ asset($berita->foto) }}" class="img-fluid rounded shadow" alt="{{ $berita->judul }}" style="max-height: 100000000px; object-fit: cover;">
        </div>

        <!-- Berita Content -->
        <div class="konten-berita">
            <p class="text-muted mb-3"><i class="far fa-calendar-alt"></i> {{ $berita->created_at->format('d M Y') }}</p>
            <h2 class="fw-bold mb-4">{{ $berita->judul }}</h2>
            <div class="text-secondary" style="line-height: 1.8; font-size: 1.1rem;">
                {!! $berita->isi !!}
            </div>
        </div>
    </div>
</section>


<section class="pb-5 position-relative mx-n3" id="berita">
    <div class="container py-5">

        <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($beritas->chunk(3) as $index => $beritaChunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row py-5">
                        @foreach ($beritaChunk as $berita)
                        <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm h-100 hovered-effect">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset($berita->foto) }}"
                                        class="img-fluid rounded-3 w-100 h-100 zoom-effect" alt="{{ $berita->judul }}"
                                        style="object-fit: cover; max-height: 250px;">
                                </div>
                                <div class="card-body">
                                    <p class="text-muted small mb-2">{{ $berita->created_at->format('d M Y') }}</p>
                                    <h5 class="fw-bold mb-3">{{ $berita->judul }}</h5>
                                    <a href="/detail/{{ $berita->slug }}" class="text-decoration-none text-danger text-center fw-bold">
                                        Ke Halaman >>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev" style="padding-left: 20px;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next" style="padding-right: 20px;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
        
        

        <div class="footer-berita text-center">
            <a href="/berita" class="btn btn-danger btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>

@endsection
