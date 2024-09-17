@extends('layouts._default.guest')
@section('content')
<style>
    /* Hide the checkbox input */
    input[type="checkbox"] {
            display: none;
        }

        /* Style the label to look clickable */
        label {
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
            display: block;
        }
        /* Hide the content by default */
        .dropdown-content {
            display: none;
            margin-left: 20px;
            padding-left: 20px;
            border-left: 2px solid #ccc;
        }

        /* Show the content when the checkbox is checked */
        input[type="checkbox"]:checked + label + .dropdown-content {
            display: block;
        }
        .accordion-button:not(.collapsed) {
            color: #0d6efd;
            
        }

        .accordion-button {
            transition: background-color 0.3s, color 0.3s;
        }

        .accordion-collapse {
            transition: height 0.35s ease;
        }

        .accordion-body {
            overflow: hidden;
        }
        .table-container {
        overflow-x: auto;
    }

    .styled-table {
        width: 100%;
        border-collapse: collapse;
    }

    .styled-table th, .styled-table td {
        padding: 12px 15px;
        border: 1px solid #0B2F9F;
        text-align: left;
    }

    .styled-table th {
        background-color: #0B2F9F;
        font-weight: bold;
    }

    /* Media Query untuk tampilan mobile */
    @media screen and (max-width: 768px) {
        .styled-table th, .styled-table td {
            padding: 8px 10px;
            font-size: 14px;
        }

        .styled-table th.w-20, .styled-table td.w-20 {
            width: 15%;
        }

        .styled-table th.w-40, .styled-table td.w-40 {
            width: 35%;
        }
    }

    @media screen and (max-width: 480px) {
        .styled-table th, .styled-table td {
            padding: 6px 8px;
            font-size: 12px;
        }

        .styled-table th.w-20, .styled-table td.w-20 {
            width: 20%;
        }

        .styled-table th.w-40, .styled-table td.w-40 {
            width: 40%;
        }
    }

</style>
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">STRUKTUR ORGANISASI</h1>
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
    <div class="shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7" id="octagram">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12  ms-auto mt-lg-0 mt-4">
                        <div class="card shadow-xl h-100 px-6 py-6 outline" style="background-color: #F5F7F8"">
                            <div class="card-body text-center">
                                <h4 class="font-weight-bold">
                                    Struktur Organisasi Jurusan Teknologi dan Komputer
                                </h4>
                            </div>
                            <div style="text-align: center;">
                                <img 
                                    src="{{ asset('assets/Img/SO-JMI-1024x692.jpg') }}" 
                                    alt="Gambar" 
                                    style="border-radius: 15px; max-width: 100%; height: auto;"
                                >
                            </div>
                            <div class="table-container">
                                {{-- ! Table Manajemen Jurusan Periode 2021-2024 --}}
                                <label for="" class="text text-start fs-6 text-bold">A. Manajemen Jurusan Periode 2021-2024</label>
                                <table class="styled-table mt-2">
                                    <thead>
                                        <tr>
                                            <th class="w-20">No</th>
                                            <th class="w-40">Jabatan</th>
                                            <th class="w-40">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ketua Jurusan</td>
                                            <td>Tri Herdiawan A., S.ST., M.T.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sekretaris Jurusan</td>
                                            <td>Rian Piarna, S.E., M.M.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                                {{-- ! Table Program Studi --}}
                                <label for="" class="text text-start fs-6 text-bold mt-3">B. Program Studi</label>
                                <table class="styled-table mt-2">
                                    <thead>
                                        <tr>
                                            <th class="w-20">No</th>
                                            <th class="w-40">Jabatan</th>
                                            <th class="w-40">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ka. Prodi D-III Sistem Informasi</td>
                                            <td>Dwi Vernanda, S.T., M.Pd.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ka. Prodi D-IV Teknologi Rekayasa Perangkat Lunak</td>
                                            <td>Mohammad Iqbal, S.Kom., M.T.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                                {{-- ! Table Kelompok Bidang Keahlian --}}
                                <label for="" class="text text-start fs-6 text-bold mt-3">C. Kelompok Bidang Keahlian (KBK)</label>
                                <table class="styled-table mt-2">
                                    <thead>
                                        <tr>
                                            <th class="w-20">No</th>
                                            <th class="w-40">Jabatan</th>
                                            <th class="w-40">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ka. KBK Sistem Informasi dan Database</td>
                                            <td>Mohammad Iqbal, S.Kom, M.T.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ka. KBK Teknologi Informasi & Rekayasa Perangkat Lunak</td>
                                            <td>Slamet Rahayu, S.Pd., M.Pd</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                                {{-- ! Table Laboratorium --}}
                                <label for="" class="text text-start fs-6 text-bold mt-3">D. Laboratorium</label>
                                <table class="styled-table mt-2">
                                    <thead>
                                        <tr>
                                            <th class="w-20">No</th>
                                            <th class="w-40">Jabatan</th>
                                            <th class="w-40">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ka. Lab. Sistem Informasi</td>
                                            <td>Taufan Abdurrachman, S.T., M.Kom.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ka. Lab. Manajemen Data dan Informasi</td>
                                            <td>Haryati, S.Pd., M.Pd.</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ka. Lab. Rekayasa Perangkat Lunak</td>
                                            <td>Sari Azhariyah, S.Pd, M.Pd.T.</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ka. Lab. Komputer dan Jaringan</td>
                                            <td>Slamet Rahayu, S.Pd., M.Pd.</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Ka. Lab. User Experience</td>
                                            <td>Chepy Perdana, S.Kom., M.Pd.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                                {{-- ! Table Wali kelas --}}
                                <label for="" class="text text-start fs-6 text-bold mt-3">E. Wali kelas Program Studi D-III Sistem Informasi</label>
                                <table class="styled-table mt-2">
                                    <thead>
                                        <tr>
                                            <th class="w-20">No</th>
                                            <th class="w-40">Jabatan</th>
                                            <th class="w-40">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                                {{-- ! Table Pembina Himpunan --}}
                                <label for="" class="text text-start fs-6 text-bold mt-3">F. Pembina Himpunan</label>
                                <table class="styled-table mt-2">
                                    <thead>
                                        <tr>
                                            <th class="w-20">No</th>
                                            <th class="w-40">Jabatan</th>
                                            <th class="w-40">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pembina Himpunan</td>
                                            <td>Haryati, S.Pd., M.Pd.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <hr style="background-color: #0B2F9F" class="mt-1">
                            <h5 for="" class="text text-start text-bold mt-2">TUGAS POKOK DAN FUNGSI JURUSAN
                                TEKNOLOGI DAN INFORMASI</h5>
                            <p class="mb-3 text-justify">
                                &emsp;&emsp;Tupoksi Organisasi Jurusan adalah menyelenggarakan kegiatan administrasi dan akademik
                                tingkat Jurusan sesuai dengan bidang IPTEK yang fokus untuk dikembangkan.
                                Adapun TUPOKSI elemen-elemen organisasi Jurusan adalah sebagai berikut:
                            </p>
                            <div class="accordion" id="accordionExample">
                                <!-- Ketua Jurusan -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            A. Ketua Jurusan
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Menyusun rencana dan program kerja Jurusan.</li>
                                                <li>Membagi tugas kepada Sekretaris Jurusan, Ketua Program Studi, dan Kepala Laboratorium.</li>
                                                <li>Mengkoordinasikan Ketua Program Studi dan Kepala Laboratorium agar terjalin kerja sama yang baik.</li>
                                                <li>Menilai prestasi kerja Dosen, Karyawan, dan Teknisi di bidang akademik sebagai dasar pembinaan karier.</li>
                                                <li>Menyelesaikan masalah-masalah akademik bagi mahasiswa.</li>
                                                <li>Menyusun konsep petunjuk teknis di bidang Akademik, khususnya penyelenggaraan kurikulum sebagai bahan masukan atasan.</li>
                                                <li>Menyusun laporan bagian berdasarkan hasil yang telah dicapai sebagai pertanggungjawaban pelaksanaan tugas.</li>
                                                <li>Melaksanakan tugas lain yang diberikan oleh pimpinan.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Sekretaris Jurusan -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            B. Sekretaris Jurusan
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Membantu ketua jurusan menyusun rencana dan program kerja.</li>
                                                <li>Menyusun instrumen pemantauan pelaksanaan proses belajar-mengajar sesuai dengan ketentuan yang berlaku.</li>
                                                <li>Menyusun konsep rencana biaya operasional unit.</li>
                                                <li>Menyusun konsep prosedur pengajuan proposal penelitian dan pengabdian kepada masyarakat bagi dosen dan mahasiswa.</li>
                                                <li>Memberi layanan administrasi bagi dosen, mahasiswa, dan pihak luar yang akan melakukan penelitian serta kegiatan akademik lainnya.</li>
                                                <li>Membantu menyusun penilaian SWMP Dosen.</li>
                                                <li>Membantu menyusun konsep laporan pelaksanaan kegiatan berdasarkan data dan informasi sebagai bahan masukan atasan.</li>
                                                <li>Melaksanakan tugas lain yang diberikan oleh atasan.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Ketua Program Studi -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            C. Ketua Program Studi
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Menyusun rencana dan program kerja program studi.</li>
                                                <li>Menyusun kurikulum, silabus, buku modul ajar, dan buku modul praktik.</li>
                                                <li>Membagi tugas pengajaran kepada dosen dan teknisi.</li>
                                                <li>Mengevaluasi kegiatan akademik dosen dan mahasiswa.</li>
                                                <li>Menyusun rencana pengembangan program studi serta pengembangan laboratorium sesuai dengan bidang keilmuan program studi.</li>
                                                <li>Menyelesaikan masalah-masalah akademik bagi dosen dan mahasiswa.</li>
                                                <li>Menyusun konsep petunjuk teknis di bidang Akademik, khususnya penyelenggaraan kurikulum sebagai bahan masukan atasan.</li>
                                                <li>Menyusun laporan bagian berdasarkan hasil yang telah dicapai sebagai pertanggungjawaban pelaksanaan tugas.</li>
                                                <li>Melaksanakan tugas lain yang diberikan oleh pimpinan.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Ketua Laboratorium -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            D. Ketua Laboratorium
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Menyusun rencana dan program kerja laboratorium sebagai pedoman pelaksanaan tugas.</li>
                                                <li>Menata uraian tugas teknisi dan petugas kebersihan sesuai dengan bidangnya.</li>
                                                <li>Mengorganisasikan, mengkoordinasikan, dan mengevaluasi tugas teknisi serta petugas kebersihan untuk kelancaran pelaksanaan tugas.</li>
                                                <li>Menyusun dan memuat data kebutuhan alat dan bahan praktikum sebagai pedoman pelaksanaan kegiatan.</li>
                                                <li>Menyusun jadwal praktikum laboratorium bersama Ka PS/jurusan sebagai pedoman pelaksanaan kegiatan.</li>
                                                <li>Menyusun jadwal teknisi pembantu praktikum sebagai pedoman pelaksanaan kegiatan.</li>
                                                <li>Memonitor dan mengevaluasi jalannya pelaksanaan praktikum berdasarkan prosedur untuk mengetahui mutu hasil praktikum.</li>
                                                <li>Menata kegiatan administrasi sesuai dengan prosedur untuk kelancaran pelaksanaan tugas.</li>
                                                <li>Menyusun prosedur standard operasional (SOP) pelayanan praktikum laboratorium sebagai pedoman pelaksanaan tugas.</li>
                                                <li>Mengajukan usulan pemeliharaan peralatan dan fasilitas laboratorium untuk kelancaran pelaksanaan tugas.</li>
                                                <li>Membantu program kegiatan penelitian dan pengabdian kepada masyarakat bagi dosen yang sudah disetujui.</li>
                                                <li>Membantu kegiatan tugas akhir mahasiswa.</li>
                                                <li>Mengatur kegiatan usaha dan jasa produksi untuk kelancaran pelaksanaan tugas.</li>
                                                <li>Melakukan pembinaan kepada pegawai di lingkungan laboratorium untuk kelancaran pelaksanaan tugas.</li>
                                                <li>Membuat laporan tengah tahunan sesuai dengan hasil yang dicapai sebagai pertanggungjawaban pelaksanaan tugas.</li>
                                                <li>Mengatur pelaksanaan kompensasi mahasiswa di Laboratorium.</li>
                                                <li>Melaksanakan tugas-tugas kedinasan lain yang diberikan atasan.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Dosen -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            E. Dosen
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Melaksanakan pendidikan, penelitian, dan pengabdian kepada masyarakat.</li>
                                                <li>Merencanakan, melaksanakan proses pembelajaran, serta menilai dan mengevaluasi hasil pembelajaran.</li>
                                                <li>Meningkatkan dan mengembangkan kualifikasi akademik dan kompetensi secara berkelanjutan sesuai perkembangan ilmu pengetahuan, teknologi, dan seni.</li>
                                                <li>Bertindak objektif dan tidak diskriminatif atas pertimbangan jenis kelamin, agama, suku, ras, kondisi fisik, dan status sosial ekonomi peserta didik.</li>
                                                <li>Menyusun laporan hasil proses belajar-mengajar berdasarkan data dan informasi sebagai bahan masukan atasan.</li>
                                                <li>Mengatur kegiatan pelatihan dan pengabdian masyarakat sesuai dengan kompetensi.</li>
                                                <li>Melaksanakan tugas-tugas yang diberikan oleh atasan.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Staf Jurusan -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            F. Staf Jurusan
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Menyusun rencana dan program kerja kegiatan administrasi jurusan.</li>
                                                <li>Membuat, merencanakan, dan melaporkan kebutuhan ATK dan fasilitas Jurusan.</li>
                                                <li>Membuat agenda kegiatan ketua dan sekretaris Jurusan.</li>
                                                <li>Menerima dan mendistribusikan surat masuk dan keluar.</li>
                                                <li>Membuat dan mengecek rekap hasil yudisium tingkat Jurusan.</li>
                                                <li>Mengkoordinasikan program kerja administrasi untuk kegiatan pelatihan/magang Jurusan.</li>
                                                <li>Membuat dan mengoordinasikan pembuatan surat pengantar PKL.</li>
                                                <li>Mengatur pelaksanaan sidang tugas akhir.</li>
                                                <li>Melaksanakan kegiatan pendaftaran ulang mahasiswa lama dan baru.</li>
                                                <li>Mengkoordinasikan dan menjaga soal-soal ujian dalam kondisi aman.</li>
                                                <li>Membantu pekerjaan administrasi dan dokumentasi yang berhubungan dengan kegiatan akademik Jurusan.</li>
                                                <li>Membantu pekerjaan administrasi dan dokumentasi dokumen-dokumen Jurusan.</li>
                                                <li>Membantu pengelolaan database Jurusan.</li>
                                                <li>Melaksanakan tugas-tugas yang diberikan atasan.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Pranata Laboratorium Pendidikan (PLP) -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            G. Pranata Laboratorium Pendidikan (PLP)
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Membantu pelaksanaan persiapan Laboratorium tiap semester di bawah petunjuk dan pengarahan Ketua Laboratorium.</li>
                                                <li>Mempersiapkan alat praktikum di Laboratorium masing-masing sesuai kebutuhan praktikum yang dikoordinasikan dengan Ketua Laboratorium.</li>
                                                <li>Membuat berita acara untuk setiap kerusakan/kekurangan/kehilangan alat-alat praktikum dan melaporkan ke Ketua Laboratorium.</li>
                                                <li>Menjaga kebersihan Laboratorium.</li>
                                                <li>Mendampingi Dosen dan Asisten Dosen praktikum dalam membantu pelaksanaan praktikum.</li>
                                                <li>Merawat, menjaga, dan menginventarisasi peralatan Laboratorium.</li>
                                                <li>Menyiapkan bahan dan peralatan yang dipakai praktikum.</li>
                                                <li>Melaksanakan tugas yang diberikan oleh atasan.</li>
                                                <li>Bertanggung jawab kepada atasan langsung.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Teknisi -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            H. Teknisi
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Membantu pelaksanaan persiapan Laboratorium tiap semester di bawah petunjuk dan pengarahan Kepala Laboratorium.</li>
                                                <li>Mempersiapkan alat praktikum di Laboratorium masing-masing sesuai kebutuhan praktikum yang dikoordinasikan dengan Kepala Laboratorium.</li>
                                                <li>Membuat berita acara untuk setiap kerusakan/kekurangan/kehilangan alat-alat praktikum dan melaporkan ke Kepala Laboratorium.</li>
                                                <li>Menjaga kebersihan Laboratorium.</li>
                                                <li>Mendampingi Dosen dan Asisten Dosen praktikum dalam membantu pelaksanaan praktikum.</li>
                                                <li>Merawat, menjaga, dan menginventarisasi peralatan Laboratorium.</li>
                                                <li>Menyiapkan bahan dan peralatan yang dipakai praktikum.</li>
                                                <li>Melaksanakan tugas yang diberikan oleh atasan.</li>
                                                <li>Bertanggung jawab kepada atasan langsung.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
