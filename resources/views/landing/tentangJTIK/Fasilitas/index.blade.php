@extends('layouts._default.guest')
@section('content')
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">FASILITAS</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->

  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <section class="py-7" id="octagram">
      <div id="fasilitasCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($fasilitas as $index => $item)
            <div class="px-6 carousel-item @if($index == 0) active @endif">
              <img src="{{ asset($item->photo) }}" class="d-block w-100 img-fluid" alt="{{ $item->nama }}" style="max-height: 500px; object-fit: cover; border-radius: 25px;">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text text-white fs-3">{{ $item->nama }}</h5>
              </div>
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </div>
@endsection