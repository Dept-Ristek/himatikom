@extends('layouts._default.guest')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto position-relative">
                        <h1 class="text-white position-relative">Berita Terkini
                            <div class="line"></div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Filter Section -->
        <section class="mb-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="month" id="filter-date" class="form-control" value="{{ now()->format('Y-m') }}">
                        <button class="btn btn-primary" id="filter-button">Filter</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section with news articles -->
        <!-- Section with news articles -->
<section class="" id="octagram">
    <div class="row py-5" id="news-list" data-aos="flip-up">
        @foreach($beritas as $berita)
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm h-100 hovered-effect">
                <div class="position-relative overflow-hidden">
                    <img src="{{ asset($berita->foto) }}"
                         class="img-fluid rounded-3 w-100 h-100 zoom-effect" 
                         alt="{{ $berita->judul }}" 
                         style="object-fit: cover; max-height: 250px;">
                </div>
                <div class="card-body">
                    <p class="text-muted small mb-2">{{ $berita->created_at->format('d M Y') }}</p>
                    <h5 class="fw-bold mb-3">{{ $berita->judul }}</h5>
                    <a href="/detail/{{ $berita->slug }}" 
                       class="text-decoration-none text-danger fw-bold">
                       Baca Selengkapnya > >
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4" style="text-align: center;">
        {{ $beritas->links() }}
    </div>
    
</section>

    </div>

    <style>
        .zoom-effect {
            transition: transform 0.3s ease;
        }

        .hovered-effect:hover .zoom-effect {
            transform: scale(1.1);
        }

        .hovered-effect {
            transition: transform 0.3s ease;
        }

        .hovered-effect:hover {
            transform: scale(1.02);
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filter-button').click(function() {
                let filterDate = $('#filter-date').val();
                $.ajax({
                    url: '{{ route('filter.berita') }}', // Sesuaikan dengan route filter
                    method: 'GET',
                    data: { date: filterDate },
                    success: function(response) {
                        $('#news-list').html(response); // Replace news content with filtered data
                    }
                });
            });
        });
    </script>
@endsection
