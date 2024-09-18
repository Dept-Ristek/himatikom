@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tabel Berita</div>
                </div>
                <div class="card-body">

                    <div class="d-flex flex-wrap gap-1 mb-3">
                        <a href="{{ route('halaman-artikel.create') }}" class="btn btn-sm btn-success">Buat Artikel</a>
                    </div>

                    <div class="table-responsive">
                        <table
                            class="table v-middle"
                            id="table_berita"
                        >
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;">Nomer</th>
                                    <th style="text-align: center; vertical-align: middle;">Gambar</th>
                                    <th style="text-align: center; vertical-align: middle;">Judul</th>
                                    {{-- <th style="text-align: center; vertical-align: middle;">Isi</th> --}}
                                    <th style="text-align: center; vertical-align: middle;">Tanggal</th>
                                    <th style="text-align: center; vertical-align: middle;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp

                                @foreach ($beritas as $berita)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">{{ $no++ }}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <img src="{{ asset($berita->foto) }}" alt="Foto" style="width: 132px; height: 132px;">
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $berita->judul}}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $berita->created_at}}</td>
                                    {{-- <td style="text-align: center; vertical-align: middle;">{{ $berita->isi}}</td> --}}
                                    {{-- <td style="text-align: center; vertical-align: middle;">{{ $berita->biro_department->name }}</td> --}}
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a
                                            href="{{ route('halaman-artikel.edit', $berita->id) }}"
                                            class="btn btn-warning btn-sm me-2"
                                        >Edit</a>
                                        <form action="{{ route('halaman-artikel.destroy', $berita->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                    
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->

<script>
    new DataTable('#table_berita');
</script>

@endsection
