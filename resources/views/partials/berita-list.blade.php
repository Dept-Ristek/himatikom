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
               Baca Selengkapnya >>
            </a>
        </div>
    </div>
</div>
@endforeach
