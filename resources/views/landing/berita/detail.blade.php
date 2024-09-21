@extends('layouts._default.guest')
@section('content')

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

@endsection
