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
                    <h1 class="text-white">KOMPETENSI LULUSAN</h1>
                    {{-- <p class="lead mb-4 text-white opacity-8"></p>
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section
        class="py-7"
        id="octagram"
    >
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-12  ms-auto mt-lg-0 mt-4">
                    <div class="card shadow-xl h-100 px-6 py-6 outline" style="background-color: #F5F7F8"">
                        <div class="card-body text-center">
                            {{-- <h4 class="font-weight-bold">Tujuan Kami</h4> --}}
                            <ul class="text-justify" style="list-style-type: none; padding-left: 0;">
                                <li class="mb-4">
                                    <strong>A. Operator Aplikasi Komputer (Clerks)</strong>
                                    <ul style="list-style-type: '- '; padding-left: 30px;">
                                        <li>Mampu menggunakan aplikasi perangkat lunak perkantoran untuk mendukung kegiatan rutin kantor.</li>
                                        <li>Mampu membuat algoritma yang akan digunakan dalam program.</li>
                                    </ul>
                                </li>
                                <li class="mb-4">
                                    <strong>B. Teknisi Sistem Informasi (Spesialis)</strong>
                                    <ul style="list-style-type: '- '; padding-left: 30px;">
                                        <li>Mampu mengoperasikan perangkat lunak aplikasi Sistem Informasi untuk menyelesaikan masalah dan/atau pekerjaan di bidang teknologi informasi pada instansi pemerintah, perusahaan atau manufaktur berskala kecil, menengah dan besar/go public yang sesuai dengan standar dan prinsip-prinsip yang berlaku umum dan relevan di bidang teknologi informasi melalui proses penganalisaan data dan pemilihan metode yang sesuai, didukung dengan kemampuan di bidang manajemen, akuntansi, keahlian interpersonal, dan komunikasi.</li>
                                        <li>Mampu mengimplementasikan rancangan basis data ke dalam database.</li>
                                    </ul>
                                </li>
                                <li class="mb-4">
                                    <strong>C. Desain Sistem Informasi (Desainer)</strong>
                                    <ul style="list-style-type: '- '; padding-left: 30px;">
                                        <li>Mampu mengidentifikasi penyebab masalah dan menemukan titik keputusan.</li>
                                        <li>Mengumpulkan dan menganalisis semua dokumen, file, dan formulir yang digunakan pada sistem yang berjalan saat ini.</li>
                                        <li>Mampu menggambarkan proses bisnis dan mengevaluasi kekurangan pada sistem yang telah berjalan.</li>
                                        <li>Mampu melakukan pengujian blackbox dan whitebox.</li>
                                        <li>Merancang perbaikan untuk sistem yang baru.</li>
                                        <li>Mampu memberikan gambaran yang jelas untuk memenuhi kebutuhan user (pemakai sistem).</li>
                                        <li>Mampu memberikan gambaran rancang bangun lengkap kepada programmer dan ahli teknik yang terlibat.</li>
                                        <li>Mampu merancang basis data yang diperlukan dalam pembangunan program.</li>
                                        <li>Mampu mengkodekan rancang bangun yang telah dibuat analisis ke dalam bahasa pemrograman.</li>
                                    </ul>
                                </li>
                            </ul>
                            <hr style="background-color: black;">
                            <p class="text-bold">Untuk dokumen lengkap dapat dilihat di sini:<br>
                            </p>
                            <a class="btn btn-outline-info btn-info" href="#">STUDENT HANDBOOK JTIK</a>
                        </div>
                        
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
