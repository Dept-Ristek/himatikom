@extends('layouts._default.guest')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto position-relative">
                        <h1 class="text-white position-relative">D-IV Teknologi Rekayasa Perangkat Lunak
                            <div class="line"></div>
                        </h1>
                        {{-- <p class="lead mb-4 text-white opacity-8">Yes we are HIMATIKOM.
                            <br>
                            Always is the best, Always in my souls, Never surrender.
                            <br>
                            Our pride our family.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="pt-7" id="sistem informasi">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 mb-3">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image">
                                    <img src="{{ asset('assets/Img/Teknik-rpl.jpg') }}" alt="img-colored-shadow"
                                        class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="#">Memperkenalkan Teknik Rekayasa Perangkat Lunak</a>
                                </h5>
                                <p>
                                    Program Studi Teknologi Rekayasa Perangkat Lunak dirancang lulusannya memiliki kemampuan dibidang kecerdasan buatan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="card border-none shadow-none">
                            <div class="card-body text-justify">
                                <h5 class="font-weight-normal">
                                    Visi
                                </h5>
                                <p class="mb-0 text-justify">
                                    Pada tahun 2045 menjadi salah satu program studi teknologi rekayasa perangkat lunak bidang kecerdasan buatan yang terbaik di Indonesia.
                                </p>
                                <h5 class="font-weight-normal mt-3">
                                    Misi
                                </h5>
                                <p class="mb-0 text-justify">
                                    1. Melaksanakan proses pembelajaran agar menghasilkan lulusan dengan kompetensi akademik yang tinggi, memiliki kemampuan kreatif dan inovatif, softskill serta etika profesional yang menonjol dengan berwawasan kewirausahaan
                                    <br>
                                    2. Melaksanakan penelitian untuk mendukung proses pembelajaran yang bermutu tinggi serta berkontribusi pada pengembangan ilmu bagi masyarakat nasional dan internasional dengan berupaya menggali potensi lokal
                                    <br>
                                    3. Melaksanakan pengabdian kepada masyarakat dengan berkontribusi untuk memajukan masyarakat dalam meningkatkan pengetahuan dan pemanfaatan teknologi informasi dan komunikasi
                                    <br>
                                    4. Meningkatkan kuantitas dan kualitas sarana dan prasarana pembelajaran untuk peningkatan kualitas pendidikan secara berkelanjutan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mt-lg-0 mb-3">
                        <div class="card border-none shadow-none">
                            <div class="card-body text-justify">
                                <h5 class="font-weight-normal">
                                    Tujuan
                                </h5>
                                <p class="mb-0 text-start">
                                    1. Menyelenggarakan pendidikan guna menghasilkan lulusan ahli di bidang rekayasa perangkat lunak yang kompetitif, inovatif, mandiri, disiplin, serta mampu bersaing di tingkat nasional maupun global.
                                    <br>
                                    2. Menghasilkan pengetahuan dan teknologi di bidang kecerdasan buatan dan internet of things melalui penelitian yang terintegrasi dengan kebutuhan masyarakat.<br>
                                    3. Menghasilkan pengabdian masyarakat yang berkualitas untuk meningkatkan kompetensi masyarakat, di bidang teknologi tekayasa perangkat lunak.<br>
                                    4. Menghasilkan produk dan jasa guna mendukung program kemitraan, kewirausahaan dan peningkatan kesejahteraan masyarakat melalui kegiatan pengabdian kepada masyarakat.
                                </p>
                            </div>
                        </div>
                        <hr style="background-color: black">
                    </div>
                    <div class="col-lg-10 mt-lg-0 mb-3">
                        <div class="card border-none shadow-none">
                            <div class="card-body text-justify">
                                <h5 class="font-weight-normal">
                                    Profil Lulusan
                                </h5>
                                <p class="mb-0 text-start">
                                    Tujuan utama dari Program Studi D4 TRPL ini adalah untuk menghasilkan lulusan sebagai :
                                </p>
                                <ul class="text-start" style="list-style: none; padding-left: 30px;">
                                        <li>1. Programmer</li>
                                        <li>2. Software Developer</li>
                                        <li>3. Database Administrator</li>
                                        <li>4. Information System Analyst</li>
                                        <li>5. Computer Support Specialist</li>
                                        <li>6. Perekayasa AI</li>
                                        <li>7. IT Enterpreneur</li>
                                </ul>
                            </div>
                        </div>
                        <hr style="background-color: black">
                    </div>
                    <div class="col-lg-10 mt-lg-0 mb-3">
                        <div class="card border-none shadow-none">
                            <div class="card-body text-justify">
                                <h5 class="font-weight-bold">
                                    Kompetensi Lulusan
                                </h5>
                                <p class="mb-0 text-start-normal">
                                    Kompetensi lulusan program studi D4 TRPL terdiri atas :
                                </p>
                                <p class="mb-0 text-start">
                                    • Kompetensi utama lulusan :
                                </p>
                                <ul class="text-start" style="list-style: none; padding-left: 30px;">
                                    <li>1. Mampu menggunakan aplikasi perangkat lunak perkantoran untuk mendukung kegiatan rutin kantor.</li>
                                    <li>2. Mampu memecahkan trouble shooting perangkat komputer baik personal komputer maupun komputer portable.</li>
                                    <li>3. Mampu melakukan assembling perangkat komputer portable.</li>
                                    <li>4. Dapat menyatakan prinsip dan tatacara pelayanan informasi dan menyediakan layanan informasi terhadap klien.</li>
                                    <li>5. Information Ordering – Mampu memaknai informasi mengikuti pola atau suatu aturan tertentu.</li>
                                    <li>6. Mampu mengelola dan memelihara sistem database.</li>
                                    <li>7. Mampu membaca dan memilih library, framework, dan pattern yang dapat digunakan dalam mengkustomisasi sistem informasi sesuai dengan spesifikasi yang diberikan.</li>
                                    <li>8. Melakukan problem solving untuk masalah rutin dan terprediksi dengan menggunakan sistem informasi.</li>
                                    <li>9. Mampu mengelola konten web.</li>
                                    <li>10. Melakukan perancangan sistem informasi.</li>
                                    <li>11. Merancang model data konseptual, lojikal, dan fisik berdasarkan Software Requirement Specification (SRS) yang telah didefinisikan.</li>
                                    <li>12. Merancang tahap dan proses modifikasi sistem (customization) untuk manfaat baru atau meningkatkan work flow.</li>
                                    <li>13. Mampu merancang dan mengimplementasikan jaringan komputer baik yang memiliki cakupan dalam skala kecil maupun besar.</li>
                                </ul>
                                <p class="mb-0 text-start">
                                    • Kompetensi pendukung lulusan :
                                </p>
                                <ul class="text-start" style="list-style: none; padding-left: 30px;">
                                    <li>1. Active Listening – Mendengarkan apa yang diucapkan orang, menyediakan waktu untuk berpikir sehingga dapat memahami dengan benar poin dari suatu pernyataan, bertanya secara tepat momen, dan tidak menginterupsi pembicaraan orang secara sembarang.</li>
                                    <li>2. Mendemonstrasikan cara mengumpulkan/Gathering, menyimpan/Storing dan mengelola/Organising Informasi.</li>
                                    <li>3. Menerapkan tool komputasi untuk membantu prosedur klerikel dan administratif.</li>
                                    <li>4. Mampu membagankan sistem informasi sederhana dengan menggunakan instrumen pemodelan.</li>
                                    <li>5. Mampu mendokumentasikan program secara implisit.</li>
                                    <li>6. Mempresentasikan perilaku aplikasi perangkat lunak kepada stakeholders dengan memperhatikan dan menerapkan prinsip komunikasi dan tool presentasi.</li>
                                    <li>7. Mampu berkomunikasi efektif dengan customer.</li>
                                    <li>8. Mendokumentasikan rancangan sistem informasi berdasarkan standar dokumentasi tertentu.</li>
                                    <li>9. Mempresentasikan hasil perancangan sistem informasi kepada stakeholders.</li>
                                    
                                </ul>
                                <p class="mb-0 text-start">
                                    • Kompetensi lainnya :
                                </p>
                                <ul class="text-start" style="list-style: none; padding-left: 30px;">
                                    <li>1. Adaptif terhadap perkembangan ilmu pengetahuan dan teknologi, khususnya di bidang TIK.</li>
                                    <li>2. Softskill (Team Building, Presentation Skills, Leadership,Teknik Negosiasi, Manajemen Perubahan dan Conflict Resolution)</li>
                                </ul>
                            </div>
                        </div>
                        <hr style="background-color: black">
                    </div>
                    <div class="col-lg-10 mt-lg-0 mb-3">
                        <div class="card border-none shadow-none">
                            <div class="card-body text-justify">
                                <h5 class="font-weight-normal">
                                    Staf Pengajar
                                </h5>
                                <ul class="text-start" style="list-style: none; padding-left: 30px;">
                                    <li>1. Nunu Nugraha Purnawan, S.Pd., M.Kom.</li>
                                    <li>2. Tri Herdiawan Apandi, S.ST., M.T.</li>
                                    <li>3. Rian Piarna, S.E., M.M.</li>
                                    <li>4. Mohammad Iqbal, S.Kom., M.T.</li>
                                    <li>5. Slamet Rahayu, S.Pd., M.Pd.</li>
                                    <li>6. Dwi Vernanda, S.T., M.Pd.</li>
                                    <li>7. Haryati, S.Pd., M.Pd.</li>
                                    <li>8. Nurfitria Khoirunnisa, S.Tr.Kom., M.Kom.</li>
                                </ul>
                            </div>
                        </div>
                        <hr style="background-color: black">
                    </div>
                    <div class="col-lg-10 mt-lg-0 mb-3">
                        <div class="card border-none shadow-none">
                            <div class="card-body text-justify">
                                <h5 class="font-weight-normal">
                                    Daftar Mata Kuliah D-IV Teknologi Rekayasa Perangkat Lunak
                                </h5>
                                <table class="styled-table mt-2">
                                    <thead>
                                        <tr>
                                            <th class="w-20">No</th>
                                            <th class="w-65">Nama Mata Kuliah</th>
                                            <th class="w-35">Kode Mata Kuliah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Pendidikan Agama</td><td>PMU0001</td></tr>
                                        <tr><td>2</td><td>Pendidikan Pancasila</td><td>PMU0002</td></tr>
                                        <tr><td>3</td><td>Pendidikan Kewarganegaraan</td><td>PMU0003</td></tr>
                                        <tr><td>4</td><td>Bahasa Indonesia</td><td>PMU0004</td></tr>
                                        <tr><td>5</td><td>Bahasa Inggris</td><td>PMU0005</td></tr>
                                        <tr><td>6</td><td>Kewirausahaan</td><td>PMU0006</td></tr>
                                        <tr><td>7</td><td>Bahasa Inggris Teknis 1</td><td>PMI0001</td></tr>
                                        <tr><td>8</td><td>Bahasa Inggris Teknis 2</td><td>PMI0002</td></tr>
                                        <tr><td>9</td><td>Etika Profesi</td><td>PMI0003</td></tr>
                                        <tr><td>10</td><td>Projek 1</td><td>PMI0004</td></tr>
                                        <tr><td>11</td><td>Projek 2</td><td>PMI0005</td></tr>
                                        <tr><td>12</td><td>Praktek Kerja Lapangan</td><td>PMI0006</td></tr>
                                        <tr><td>13</td><td>Proyek Akhir</td><td>PMI0007</td></tr>
                                        <tr><td>14</td><td>Pengolahan Data dan Informasi</td><td>PSI3101</td></tr>
                                        <tr><td>15</td><td>Pengantar Teknologi Infromasi dan Komunikasi</td><td>PSI3102</td></tr>
                                        <tr><td>16</td><td>Matematika Diskrit</td><td>PSI3103</td></tr>
                                        <tr><td>17</td><td>Pemrograman Dasar 1</td><td>PSI3104</td></tr>
                                        <tr><td>18</td><td>Komunikasi Teknis</td><td>PSI3201</td></tr>
                                        <tr><td>19</td><td>Matematika Terapan</td><td>PSI3202</td></tr>
                                        <tr><td>20</td><td>Sistem Operasi</td><td>PSI3203</td></tr>
                                        <tr><td>21</td><td>Pemrograman Dasar 2</td><td>PSI3204</td></tr>
                                        <tr><td>22</td><td>Manajemen</td><td>PSI3205</td></tr>
                                        <tr><td>23</td><td>Pengantar Akuntansi</td><td>PSI3206</td></tr>
                                        <tr><td>24</td><td>Pemrograman Berbasis Objek</td><td>PSI3301</td></tr>
                                        <tr><td>25</td><td>Basis Data 1</td><td>PSI3302</td></tr>
                                        <tr><td>26</td><td>Sistem Informasi Manajemen</td><td>PSI3303</td></tr>
                                        <tr><td>27</td><td>Sistem Informasi Akuntansi</td><td>PSI3304</td></tr>
                                        <tr><td>28</td><td>Statistik dan Probabilitas</td><td>PSI3305</td></tr>
                                        <tr><td>29</td><td>Komunikasi Data dan Jaringan</td><td>PSI3306</td></tr>
                                        <tr><td>30</td><td>Analisis dan Perancangan Sistem Informasi 1</td><td>PSI3401</td></tr>
                                        <tr><td>31</td><td>Basis Data 2</td><td>PSI3402</td></tr>
                                        <tr><td>32</td><td>Pemrograman Web</td><td>PSI3403</td></tr>
                                        <tr><td>33</td><td>Data Mining</td><td>PSI3404</td></tr>
                                        <tr><td>34</td><td>Analisis dan Perancangan Sistem Informasi 2</td><td>PSI3501</td></tr>
                                        <tr><td>35</td><td>Data Warehouse</td><td>PSI3502</td></tr>
                                        <tr><td>36</td><td>Sistem Pengambil Keputusan</td><td>PSI3503</td></tr>
                                        <tr><td>37</td><td>Perancangan Antar Muka</td><td>PSI3504</td></tr>
                                        <tr><td>38</td><td>E-Commerce</td><td>PSI3601</td></tr>
                                        <tr><td>39</td><td>Manajemen Proyek</td><td>PSI3602</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
