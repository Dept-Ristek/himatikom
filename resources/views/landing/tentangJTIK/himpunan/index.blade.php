@extends('layouts._default.guest')
@section('content')
<!-- -------- START HEADER 7 w/ text and video ------- -->
<header class="bg-gradient-dark">
    <div
        class="page-header min-vh-75"
        style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');"
    >
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">HIMATIKOM</h1>
                    <p class="lead mb-4 text-white opacity-8">Yes we're HIMATIKOM, Always is the best, Always in my
                        souls, Never surrender. Our pride our family.</p>
                    <h6 class="text-white mb-2 mt-5">Find Us</h6>
                    <div class="d-flex justify-content-center">
                        <a
                            href="https://www.instagram.com/himatikom.polsub/"
                            target="_blank"
                        ><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                        <a
                            href="https://www.tiktok.com/@himatikom_polsub"
                            target="_blank"
                        ><i class="fab fa-tiktok text-lg text-white me-4"></i></a>
                        <a
                            href="https://www.youtube.com/@mipolsubofficial7516"
                            target="_blank"
                        ><i class="fab fa-youtube text-lg text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7" id="octagram">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="{{ asset('icon/octagram-no-bg.png') }}" alt="img-colored-shadow"
                                    class="img-fluid border-radius-lg">
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="font-weight-normal">
                                <a href="#">Memperkenalkan Kabinet Octagram</a>
                            </h5>
                            <p class="mb-0 text-justify mx-5">
                                Kabinet Kemahasiswaan periode 2023-2024 dirancang sebagai motor penggerak inovasi dan kolaborasi, dengan fokus pada pengembangan mahasiswa yang lebih inklusif, progresif, dan berdaya saing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  ms-auto mt-lg-0 mt-3">
                    <div class="card border-none shadow-none">
                        <div class="card-body text-start">
                            <h5 class="font-weight-normal">
                                <a href="#">Visi</a>
                            </h5>
                            <p class="mb-0 text-justify">
                                VISI 
                                HIMATIKOM POLSUB 
                                KABINET OCTAGRAM 
                                “Mewujudkan Himpunan Mahasiswa Teknologi Informasi dan Komputer 
                                (HIMATIKOM) sebagai wadah dalam pengembangan dan pemberdayaan Mahasiswa 
                                teknologi Informasi dan Komputer dalam berorganisasi yang menjungjung tinggi rasa 
                                kekeluargaan.”
                            </p>
                            <h5 class="font-weight-normal mt-3">
                                <a href="#">Misi</a>
                            </h5>
                            <p class="mb-0 text-justify">
                                1. Menjaga Kestabilan Pengembangan dan Pemberdayaan Di Dalam Himpunan Sesuai Dengan AD/ART <br>
                                2. Menyediakan Sarana Untuk Mendorong Kreativitas, Inovasi, Aspirasi, dan Kolaborasi Antar Anggota <br>
                                3. Meningkatkan Kualitas Proker dan Agenda Himpunan Demi Memperkuat Ikatan Kekeluargaan Pada Himpunan
                            </p>
                            <h5 class="font-weight-normal mt-3">
                                <a href="#">Makna Logo</a>
                            </h5>
                            <p class="mb-0 text-justify">
                                1. Octagram bermakna keseimbangan <br>
                                2. Spiral bermakna mencerminkan perjalanan yang berkelanjutan dan perubahan seiring 
                                waktu. Merepresentasikan proses kreativitas, dan inspirasi. Spiral dapat menggambarkan 
                                aliran ide yang tak terputus.
                            </p>
                            <h5 class="font-weight-normal mt-3">
                                <a href="#">Makna Warna</a>
                            </h5>
                            <p class="mb-0 text-justify">
                                1. Biru melambangkan kedamaian, kejujuran dan percaya diri. <br>
                                2. Ungu melambangkan kreativitas dan kebijaksanaan. <br>
                                3. Merah Muda melambangkan kekeluargaan yang harmonis, <br>
                                4. Ketiga warna menyatu bermakna tentang keberanian yang tenang, penuh kasih, dan 
                                percaya diri.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section
        class="pb-5 position-relative bg-gradient-dark mx-n3"
        id="our_team"
    >
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <h3 class="text-white z-index-1 position-relative">Meet Our Team</h3>
                    <span class="text-secondary">Badan Pengurus Harian</span>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($pengurus_harians as $key => $pengurus_harian)
                <div class="col-lg-6 col-12 my-3">
                    <div class="card card-profile mt-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="#">
                                    <div class="p-3 pe-md-0">
                                        <img
                                            class="w-100 border-radius-md shadow-lg"
                                            src="{{ asset($pengurus_harian->photo) }}"
                                            alt="Photo of {{ $pengurus_harian->name }}"
                                        >
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">{{ $pengurus_harian->name }}</h5>
                                    <p class="mb-0">{{ $pengurus_harian->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <span class="text-secondary">Biro dan Departemen</span>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($biro_departments as $key => $biro_departmen)
                <div class="col-lg-6 col-12 my-3">
                    <div class="card card-profile mt-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="#">
                                    <div class="p-3 pe-md-0">
                                        <img
                                            class="w-100 border-radius-md shadow-lg"
                                            src="{{ asset($biro_departmen->photo) }}"
                                            alt="Photo of {{ $biro_departmen->name }}"
                                        >
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">{{ $biro_departmen->name }}</h5>
                                    <p class="mb-0">{{ $biro_departmen->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>
@endsection