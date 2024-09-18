@extends('layouts._default.guest')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">KONTAK</h1>
                        {{-- <p class="lead mb-4 text-white opacity-8"></p>
                        <h6 class="text-white mb-2 mt-5">Find Us</h6>
                        <div class="d-flex justify-content-center">
                            <a href="https://www.instagram.com/himatikom.polsub/" target="_blank"><i
                                    class="fab fa-instagram text-lg text-white me-4"></i></a>
                            <a href="https://www.tiktok.com/@himatikom_polsub" target="_blank"><i
                                    class="fab fa-tiktok text-lg text-white me-4"></i></a>
                            <a href="https://www.youtube.com/@mipolsubofficial7516" target="_blank"><i
                                    class="fab fa-youtube text-lg text-white"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="my-2 pt-5" id="feedback">
            <div class="container">
                <div class="row">
                    <div class="card-header">
                        <h4>Hubungi Kami</h4>
                    </div>
                    <div class="col-md-6 m-auto">
                        <div class="card shadow-none">

                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama*</label>
                                        <input type="text" class="form-control border" id="nama" required
                                            style="padding-left: 15px">
                                    </div>
                                    <div class="mb-3">
                                        <label   for="email" class="form-label">Email*</label>
                                        <input type="email" class="form-control border" id="email" required
                                            style="padding-left: 15px">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjek"   class="label-label">Subjek</label>
                                        <input type="text" class="form-control border" id="subjek"
                                            style="padding-left: 15px">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        <textarea class="form-control border" id="pesan" style="padding-left: 15px" rows="5"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-outline-info btn-info">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <div class="position-relative">
                            <div class="card-body">
                                <form>
                                    <div class="mb-5 d-flex align-items-center">
                                        <div class="icon-circle me-3 mt-1">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div>
                                            <label for="nama" class="form-label">Nomor Kami</label>
                                            <a href="tel:+622249667492" class="text text-black fs-6 d-block">(+62) 224-966-749-2</a>
                                        </div>
                                    </div>
                                    <div class="mb-5 d-flex align-items-center">
                                        <div class="icon-circle me-3  mt-1">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <label for="email" class="form-label">Email Kami</label>
                                            <a href="mailto:jmi.polsub@gmail.com" class="text text-black fs-6 d-block">jmi.polsub@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="mb-5 d-flex align-items-center">
                                        <div class="icon-circle me-3  mt-1">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                        <div>
                                            <label for="instagram" class="form-label">Instagram</label>
                                            <a href="https://instagram.com/jtik.polsub" class="text text-black fs-6 d-block">@jtik.polsub</a>
                                        </div>
                                    </div>
                                    <div class="mb-5 d-flex align-items-center">
                                        <div class="icon-circle me-3  mt-1">
                                            <i class="fas fa-location-dot"></i>
                                        </div>
                                        <div>
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <a href="https://goo.gl/maps/xXXxXX" class="text text-black fs-6 d-block">Blok Kaleng Banteng Desa Cibogo, Kec. Cibogo, Kabupaten Subang, Jawa Barat 41285</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
        </section>
    </div>
@endsection
