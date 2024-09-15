@extends('layouts._default.app')
@section('content')

    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            
            <div class="d-flex">
                <a href="{{ route('halaman-artikel')}}">Kembali</a>
                <div class="mx-1"> . </div>
                <a href=""> Refresh Artikel </a>
            </div>

            <h4>Halaman Edit Artikel</h4>

            <form action="{{ route('halaman-artikel.update', $berita->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-4">
                    <label for="">Masukkan Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                    name="judul" value="{{ old('judul', $berita->judul)}}">

                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Pilih Thumbnail</label>
                    <input type="hidden" name="old_foto" value="{{ $berita->foto}}">

                    <div>
                        <img src="{{asset('storage/artikel/' . $berita->foto )}}" class="col-lg-4" alt="">
                    </div>

                    <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                    name="foto">

                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Artikel Berita</label>
                    <textarea type="text" class="form-control @error('isi') is-invalid @enderror" 
                    name="isi" id="textarea">
                    {{ $berita->isi }}
                    </textarea>

                    @error('isi')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </section>

@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.3.0/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: '#textarea',  // use # to target an ID
            height: 200,
        });
    </script>
@endsection