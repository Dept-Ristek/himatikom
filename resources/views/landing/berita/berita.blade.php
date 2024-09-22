@extends('layouts._default.guest')
@section('content')


<style>
    .d-flex {
        align-items: center;
    }

    .arrow {
        padding: 0 10px;
        font-weight: bold;
        text-decoration: none;
        color: #007bff; /* Ganti dengan warna yang diinginkan */
    }

    .page-number, .current-page {
        display: inline-block;
        padding: 5px 10px;
        border: 1px solid #007bff; /* Ganti dengan warna yang diinginkan */
        border-radius: 4px;
        margin: 0 2px;
        text-decoration: none;
        color: #007bff; /* Ganti dengan warna yang diinginkan */
    }

    .current-page {
        background-color: #007bff; /* Ganti dengan warna yang diinginkan */
        color: white;
    }

    .disabled {
        color: #ccc;
    }

    .arrow i {
        font-size: 1.2em; /* Ukuran ikon */
    }
</style>


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
        <section class="mt-3">
            <div class="row justify-content-between">
                <div class="col-lg-4 mx-4">
                    <!-- Form pencarian berdasarkan nama -->
                    <form action="{{ route('berita') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="keyword" placeholder="Nama"
                                value="{{ request()->keyword }}">
                            <button type="submit" class="btn btn-warning">🔍 Cari Nama</button>
                        </div>
                    </form>
                </div>

                <!-- Form pencarian berdasarkan tanggal -->
                <div class="col-lg-4">
                    <form action="{{ route('berita') }}" method="GET">
                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-control" name="bulan">
                                    <option value="">Pilih Bulan</option>
                                    @foreach (range(1, 12) as $month)
                                        <option value="{{ $month }}"
                                            {{ request()->bulan == $month ? 'selected' : '' }}>
                                            {{ DateTime::createFromFormat('!m', $month)->format('F') }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" name="tahun" placeholder="Tahun"
                                    value="{{ request()->tahun }}">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning">🗓️ Cari Tanggal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
            <!-- Hasil pencarian -->
            @if (request()->has('keyword') || request()->has('tanggal') || request()->has('bulan') || request()->has('tahun'))
                @if ($totalBerita > 0)
                    <strong class="m-4 text text-success">Data yang ditemukan ada: {{ $totalBerita }}</strong>
                @else
                    <strong class="m-4 text text-danger">Data Tidak Ada</strong>
                @endif
            @endif

        </section>


        <!-- Section with news articles -->
        <section class="mx-4" id="octagram">
            <div class="row py-5" id="news-list" data-aos="flip-up">
                @foreach ($beritas as $berita)
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm h-100 hovered-effect">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset($berita->foto) }}" class="img-fluid rounded-3 w-100 h-100 zoom-effect"
                                    alt="{{ $berita->judul }}" style="object-fit: cover; max-height: 250px;">
                            </div>
                            <div class="card-body">
                                <p class="text-muted small mb-2">{{ $berita->created_at->format('d M Y') }}</p>
                                <h5 class="fw-bold mb-3">{{ $berita->judul }}</h5>
                                <a href="/detail/{{ $berita->slug }}" class="text-decoration-none text-danger fw-bold">
                                    Baca Selengkapnya > >
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- pagination --}}
            <div class="d-flex justify-content-center mt-4">
                @if ($beritas->onFirstPage())
                    <span class="disabled arrow"><i class="fas fa-chevron-left"></i></span>
                @else
                    <a href="{{ $beritas->previousPageUrl() }}" class="arrow"><i class="fas fa-chevron-left"></i></a>
                @endif
            
                @foreach ($beritas->getUrlRange(1, $beritas->lastPage()) as $page => $url)
                    @if ($page == $beritas->currentPage())
                        <span class="current-page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="page-number">{{ $page }}</a>
                    @endif
                @endforeach
            
                @if ($beritas->hasMorePages())
                    <a href="{{ $beritas->nextPageUrl() }}" class="arrow"><i class="fas fa-chevron-right"></i></a>
                @else
                    <span class="disabled arrow"><i class="fas fa-chevron-right"></i></span>
                @endif
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
                    data: {
                        date: filterDate
                    },
                    success: function(response) {
                        $('#news-list').html(
                            response); // Replace news content with filtered data
                    }
                });
            });
        });
    </script>
@endsection
