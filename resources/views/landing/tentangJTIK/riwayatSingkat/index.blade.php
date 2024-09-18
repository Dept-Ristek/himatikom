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
                    <h1 class="text-white">RIWAYAT SINGKAT</h1>
                    <p class="lead mb-4 text-white opacity-8"></p>
                    {{-- <h6 class="text-white mb-2 mt-5">Find Us</h6>
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
                    <div class="card shadow-xl h-100 px-6 py-6 outline " style="background-color: #F5F7F8"">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">
                                Riwayat Singkat
                            </h4>
                            <p class="mb-3 mt-3 text-justify  hovered-effect">
                                &emsp;&emsp;Politeknik Negeri Subang (POLSUB) sebagai salah satu dari 43 Politeknik Negeri di Indonesia,  memiliki peran yang cukup strategis dalam pembangunan nasional, untuk menghasilkan lulusan siap pakai sesuai dengan bidang keahliannya.  Dalam upaya mewujudkan peran tersebut, sejak awal POLSUB telah melaksanakan program pendidikan vokasi yang dahulu disebut sebagai jalur pendidikan profesional. Pada pendidikan vokasi, porsi peningkatan keterampilan dalam bentuk kegiatan praktik dan praktikum menempati porsi lebih tinggi dibanding kegiatan perkuliahan di dalam kelas.  Untuk mewujudkan peran tersebut, berbagai upaya pengembangan juga telah dilakukan untuk membenahi pelaksanaan proses pembelajaran yang lebih baik. Pelaksanaan program pengembangan dilakukan secara bertahap.
                            </p>
                            <p class="mb-3 text-justify hovered-effect">
                                &emsp;&emsp;Politeknik Negeri Subang (POLSUB) merupakan perguruan tinggi negeri baru yang rencana proses pendiriannya dimulai melalui nota kesepakatan (MOU) antara Pemerintah Kabupaten Subang dengan Direktur Jenderal Pendidikan Tinggi Kemdikbud pada tahun 2011. Pada tanggal 2 April 2014 Politeknik Negeri Subang diresmikan oleh Presiden Republik Indonesia saat itu, Bapak Susilo Bambang Yudhoyono di Istana Negara. Setelah peresmian tersebut, diangkat Direktur pertama POLSUB melalui Surat Keputusan Menteri Pendidikan dan Kebudayaan no. 112/MPK.A4/KP/2014, tertanggal 24 April 2014.
                            </p>
                            <p class="mb-3 text-justify hovered-effect">
                                &emsp;&emsp;Saat itu belum ada sama sekali gedung serta fasilitas kampus, sehingga Pemkab Subang sesuai MOU meminjamkan gedung kelas sementara untuk Politeknik Negeri Subang yang berada di SMA PGRI 2 dan SMA Langlang Buana yang sampai saat ini masih digunakan untuk menjalankan perkuliahan. Disamping itu Pemkab Subang juga meminjamkan rumah dinas Ketua DPRD Kabupaten Subang sebagai kantor Direktorat sementara. Dengan bertambahnya kegiatan, karyawan, serta dosen, maka sejak akhir tahun 2015 kantor Rektorat Politeknik Negeri Subang resmi berpindah dari rumah Dinas Ketua DPRD Kab. Subang ke Gedung Islamic Center yang berada di jalan Arief Rahman Hakim nomor 8 sampai saat ini.
                            </p>
                            <p class="mb-3 text-justify hovered-effect">
                                &emsp;&emsp;POLSUB yang pada awalnya belum memiliki sumber daya manusia sama sekali, banyak mendapat bantuan teknis dari Politeknik Negeri Bandung (POLBAN) dan Politeknik Negeri Manufaktur Bandung (POLMAN). Dengan bantuan teknis dari kedua Politeknik Negeri tersebut, maka secara perlahan POLSUB mulai dapat berjalan. Di tahun 2015 dilakukan MoU dan Perjanjian Kerja Sama dengan beberapa lembaga pemerintah, yaitu dengan Pusat Pengembangan Teknologi Tepat Guna LIPI  dan Balai Latihan Kerja (BLK) Kabupaten Subang, guna membantu proses perkuliahan dan praktik mahasiswa.
                            </p>
                            <p class="mb-3 text-justify hovered-effect">
                                &emsp;&emsp;Politeknik Negeri Subang memiliki tiga Jurusan yaitu Managemen Informatika (MI), Agroindustri (AI), dan Teknik Perawatan dan Perbaikan Mesin (TPPM). Pendirian Politeknik Negeri Subang ini dilandasi dengan konsep dasar yang sesuai dan berorientasi pada potensi pengembangan kawasan di Kabupaten Subang. Konsep inti adalah untuk mempercepat pembangunan pada daerah yang baru tumbuh untuk mendukung pertumbuhan industri maupun pada daerah yang telah berkembang untuk mempercepat pengembangan industri secara global di wilayah Indonesia.
                            </p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
