@extends('layouts._default.guest')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <style>
        /* Sembunyikan teks pada awalnya */
        .hidden-text {
            transform: translateY(100%);
            opacity: 0;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        /* Saat kursor diarahkan ke card, teks muncul dari bawah */
        .hovered-effect:hover .hidden-text {
            transform: translateY(0);
            opacity: 1;
        }
    </style>

    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto position-relative">
                        <h1 class="text-white position-relative">HIMATIKOM
                            <div class="line"></div>
                        </h1>
                        <p class="lead mb-4 text-white opacity-8">Yes we are HIMATIKOM.
                            <br>
                            Always is the best, Always in my souls, Never surrender.
                            <br>
                            Our pride our family.
                        </p>
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
                                    Mewujudkan Himpunan Mahasiswa Teknologi Informasi dan Komputer 
                                    (HIMATIKOM) sebagai wadah dalam pengembangan dan pemberdayaan Mahasiswa 
                                    teknologi Informasi dan Komputer dalam berorganisasi yang menjungjung tinggi rasa 
                                    kekeluargaan.
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
        <hr style="background-color: #0B2F9F">
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <div class="card shadow-none">
                            <div class="card-header text-center">
                                <h2 class="fw-bold">Program Studi JTIK</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-5 ms-auto mt-lg-0 mt-4 hovered-effect">
                            <div class="card shadow-xl h-100 px-6 py-6 outline">
                                <div class="card-body text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="158" height="158" x="0" y="0"
                                        viewBox="0 0 256 256" style="enable-background:new 0 0 158 158" xml:space="preserve"
                                        class="">
                                        <g>
                                            <path fill="#72c2e9"
                                                d="M240.515 23.049H15.485c-5.523 0-10 4.477-10 10v142.06c0 5.523 4.477 10.002 10 10.002h225.03c5.523 0 10-4.479 10-10.002V33.049c0-5.523-4.477-10-10-10z"
                                                opacity="1" data-original="#72c2e9"></path>
                                            <path fill="#efefef" d="M234.613 38.952v130.254H21.388V38.952z" opacity="1"
                                                data-original="#efefef"></path>
                                            <path fill="#72c2e9" d="M152.72 216.451h-49.44l8.82-31.34h31.8z" opacity="1"
                                                data-original="#72c2e9"></path>
                                            <path fill="#4ba5c8" d="M146.48 194.281h-36.96l2.58-9.17h31.8z" opacity="1"
                                                data-original="#4ba5c8"></path>
                                            <path fill="#72c2e9"
                                                d="M175.75 226.451v6.5h-95.5v-6.5c0-5.52 4.48-10 10-10h75.5c5.52 0 10 4.48 10 10z"
                                                opacity="1" data-original="#72c2e9"></path>
                                            <path fill="#7c7b7a"
                                                d="M83.55 70.955H57.63l.006-7.501a4.572 4.572 0 0 1 4.571-4.568h13.375c1.622 0 3.22-.392 4.658-1.143l5.586-2.917c2.826 5.643 1.647 11.951-2.276 16.129z"
                                                opacity="1" data-original="#7c7b7a"></path>
                                            <path fill="#ffb69f"
                                                d="M70.588 93.456c-7.156 0-12.957-5.801-12.957-12.957v-9.544h25.915v9.544c-.001 7.156-5.802 12.957-12.958 12.957z"
                                                opacity="1" data-original="#ffb69f"></path>
                                            <path fill="#fc5d3d"
                                                d="M95.499 108.555v15.901h-50.21v-15.901c0-8.335 6.764-15.099 15.099-15.099H80.4c8.334 0 15.099 6.764 15.099 15.099zM196.891 70.789l-33.18 33.29-17.91-43.46a46.813 46.813 0 0 1 17.91-3.54c12.95 0 24.68 5.24 33.18 13.71z"
                                                opacity="1" data-original="#fc5d3d"></path>
                                            <path fill="#72c2e9"
                                                d="m209.701 94.339-45.99 9.74 33.18-33.29a46.945 46.945 0 0 1 12.81 23.55z"
                                                opacity="1" data-original="#72c2e9"></path>
                                            <path fill="#f0c020"
                                                d="m183.771 146.589-20.06-42.51 45.99-9.74c4.512 21.464-6.319 42.986-25.93 52.25z"
                                                opacity="1" data-original="#f0c020"></path>
                                            <path fill="#7d7b79"
                                                d="m163.711 104.079-20.63 42.23c-15.62-7.64-26.37-23.68-26.37-42.23 0-19.62 12.02-36.42 29.09-43.46z"
                                                opacity="1" data-original="#7d7b79"></path>
                                            <path fill="#13bf6d"
                                                d="M183.771 146.589a46.731 46.731 0 0 1-20.06 4.49c-7.4 0-14.41-1.71-20.63-4.77l20.63-42.23z"
                                                opacity="1" data-original="#13bf6d"></path>
                                            <path fill="#ffffff"
                                                d="M225.612 163.254H46.867a2.5 2.5 0 1 1 0-5h176.245V48.5a2.5 2.5 0 1 1 5 0v112.254a2.5 2.5 0 0 1-2.5 2.5zm-188.745 0h-6.479a2.5 2.5 0 1 1 0-5h6.479a2.5 2.5 0 1 1 0 5z"
                                                opacity="1" data-original="#ffffff"></path>
                                            <circle cx="21.39" cy="78.95" r="2.5" fill="#000000" opacity="1"
                                                data-original="#000000" class=""></circle>
                                            <path
                                                d="M250.52 121.87a2.51 2.51 0 0 0-2.5 2.51c0 1.37 1.12 2.49 2.5 2.49 1.37 0 2.49-1.12 2.49-2.49 0-1.38-1.12-2.51-2.49-2.51z"
                                                fill="#000000" opacity="1" data-original="#000000" class="">
                                            </path>
                                            <circle cx="102.25" cy="232.95" r="2.5" fill="#000000" opacity="1"
                                                data-original="#000000" class=""></circle>
                                            <path
                                                d="M18.89 169.21c0 1.38 1.114 2.49 2.5 2.49h213.22c1.401 0 2.5-1.129 2.5-2.49V38.95c0-1.36-1.088-2.5-2.5-2.5H21.39a2.496 2.496 0 0 0-2.5 2.5v30a2.5 2.5 0 0 0 5 0v-27.5h208.22v125.26H23.89V88.95a2.5 2.5 0 0 0-5 0z"
                                                fill="#000000" opacity="1" data-original="#000000" class="">
                                            </path>
                                            <path
                                                d="M2.979 175.11c.011 6.89 5.61 12.5 12.5 12.5h93.32l-7.412 26.34H90.25c-6.891.01-12.5 5.61-12.5 12.5v6.5c0 1.393 1.136 2.5 2.5 2.5h12a2.5 2.5 0 0 0 0-5h-9.5v-4c.01-4.13 3.37-7.49 7.5-7.5h75.5c4.13.01 7.49 3.37 7.5 7.5v4h-61a2.5 2.5 0 0 0 0 5h63.5c1.369 0 2.5-1.097 2.5-2.5v-6.5c0-6.89-5.61-12.49-12.5-12.5h-11.137l-7.412-26.34h93.319c6.891 0 12.49-5.61 12.49-12.5v-40.74c0-1.37-1.12-2.49-2.49-2.49-1.38 0-2.5 1.12-2.5 2.49v40.74c-.01 4.13-3.38 7.49-7.5 7.5H15.479c-4.12-.01-7.489-3.37-7.5-7.5V33.05c.011-4.13 3.38-7.5 7.5-7.5h225.04c4.12 0 7.49 3.37 7.5 7.5v81.32c0 1.38 1.12 2.51 2.5 2.51s2.5-1.13 2.5-2.51c0 0 0-.01-.01-.01V33.05c0-6.89-5.6-12.5-12.49-12.5H15.479c-6.89 0-12.5 5.61-12.5 12.5zm103.603 38.84 7.412-26.339h28.014l7.412 26.339z"
                                                fill="#000000" opacity="1" data-original="#000000" class="">
                                            </path>
                                            <path
                                                d="M42.789 108.555v15.901a2.5 2.5 0 1 0 5 0v-15.901c0-6.947 5.652-12.599 12.6-12.599H80.4c6.947 0 12.6 5.652 12.6 12.599v15.901a2.5 2.5 0 1 0 5 0v-15.901c0-9.208-7.112-16.773-16.129-17.524 2.581-2.764 4.175-6.461 4.175-10.532V71.88c4.186-5.05 5.077-12.047 2.015-18.17-.642-1.285-2.171-1.719-3.39-1.1l-5.59 2.92c-1.07.56-2.28.86-3.5.86H62.21c-3.9 0-7.07 3.17-7.07 7.06-.011 8.452-.009 4.023-.009 17.049 0 4.062 1.587 7.752 4.158 10.513-9.191.572-16.5 8.21-16.5 17.543zm17.342-28.056V73.46h20.914v7.039c0 5.766-4.691 10.458-10.457 10.458s-10.457-4.692-10.457-10.458zM62.21 61.39h13.37c3.625 0 5.694-1.364 8.92-3.05.948 3.679.06 7.363-2.097 10.115H60.13l.01-4.995c0-1.14.929-2.07 2.07-2.07zM95.5 134.38H45.29a2.5 2.5 0 0 0-2.5 2.5c0 1.37 1.12 2.5 2.5 2.5H95.5c1.38 0 2.5-1.13 2.5-2.5a2.5 2.5 0 0 0-2.5-2.5zM95.5 145.88H45.29a2.5 2.5 0 0 0-2.5 2.5c0 1.37 1.12 2.49 2.5 2.49H95.5c1.38 0 2.5-1.12 2.5-2.49a2.5 2.5 0 0 0-2.5-2.5zM163.711 153.579c7.393 0 14.5-1.591 21.125-4.729l.002-.001c20.227-9.554 32.121-32.129 27.309-55.022v-.005c-4.637-21.971-24.131-39.244-48.436-39.244-26.975 0-49.5 21.73-49.5 49.5 0 28.04 22.8 49.501 49.5 49.501zm33.137-79.205a44.298 44.298 0 0 1 9.822 18.051l-35.256 7.467 25.434-25.518zm-50.396 70.73 17.22-35.25 16.743 35.481c-5.292 2.154-10.899 3.244-16.704 3.244-6.024 0-11.818-1.168-17.259-3.475zm38.482-1.909L167.32 105.87l40.379-8.552c2.88 18.924-6.674 37.126-22.765 45.877zm-21.223-83.616c11.021 0 21.437 3.982 29.596 11.265l-28.715 28.811-15.501-37.615a44.239 44.239 0 0 1 14.62-2.461zm-44.5 44.5c0-17.258 9.834-32.748 25.258-40.131l16.502 40.044-19.008 38.911c-14.098-7.876-22.752-22.532-22.752-38.824z"
                                                fill="#000000" opacity="1" data-original="#000000" class="">
                                            </path>
                                        </g>
                                    </svg>
                                    <h4 class="font-weight-bold mt-3">
                                        Sistem Informasi
                                    </h4>
                                    <p class="mb-0 text-justify hidden-text">
                                        Program Studi Sistem Informasi dirancang lulusannya memiliki pengetahuan dan
                                        keterampilan didalam mendesain dan mengelola sistem informasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 ms-auto mt-lg-0 mt-4 hovered-effect">
                            <div class="card shadow-xl h-100 px-6 py-6 outline">
                                <div class="card-body text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="158" height="158" x="0"
                                        y="0" viewBox="0 0 511.998 511" style="enable-background:new 0 0 158 158"
                                        xml:space="preserve">
                                        <g>
                                            <path fill="#ffd86e"
                                                d="M478.453 421.531H32.98c-14.078 0-25.488-11.41-25.488-25.484V33.48c0-14.078 11.41-25.488 25.488-25.488h445.473c14.074 0 25.485 11.41 25.485 25.488v362.567c0 14.074-11.41 25.484-25.485 25.484zm0 0"
                                                opacity="1" data-original="#ffd86e"></path>
                                            <path fill="#ffb509"
                                                d="M503.941 33.48v362.567c0 14.074-11.41 25.484-25.484 25.484h-31.133c14.078 0 25.485-11.41 25.485-25.484V33.48c0-14.074-11.407-25.484-25.485-25.484h31.133c14.074 0 25.484 11.41 25.484 25.484zm0 0"
                                                opacity="1" data-original="#ffb509"></path>
                                            <path fill="#838383"
                                                d="M503.938 360.129H7.491v35.918c0 14.074 11.41 25.484 25.488 25.484h445.473c14.074 0 25.485-11.41 25.485-25.484zm0 0"
                                                opacity="1" data-original="#838383"></path>
                                            <path fill="#5a5a5a"
                                                d="M503.941 360.129v35.918c0 14.074-11.41 25.484-25.484 25.484h-31.133c14.078 0 25.485-11.41 25.485-25.484v-35.918zm0 0"
                                                opacity="1" data-original="#5a5a5a"></path>
                                            <path fill="#acacac"
                                                d="M504.508 94.934H8.047V33.477c0-14.075 11.41-25.485 25.484-25.485h445.492c14.075 0 25.485 11.41 25.485 25.485zm0 0"
                                                opacity="1" data-original="#acacac"></path>
                                            <path fill="#9c9c9c"
                                                d="M504.512 33.473v61.465h-31.703V33.472c0-14.067-11.407-25.477-25.485-25.477h31.7c14.078 0 25.488 11.41 25.488 25.477zm0 0"
                                                opacity="1" data-original="#9c9c9c"></path>
                                            <path fill="#5a5a5a" d="M186.277 421.531h138.875v41.86H186.277zm0 0"
                                                opacity="1" data-original="#5a5a5a"></path>
                                            <path fill="#838383"
                                                d="M370.152 504.453H141.277a4.998 4.998 0 0 1-4.996-4.996V483.27c0-10.977 8.903-19.88 19.88-19.88h199.112c10.977 0 19.875 8.903 19.875 19.88v16.187a4.993 4.993 0 0 1-4.996 4.996zm0 0"
                                                opacity="1" data-original="#838383"></path>
                                            <path fill="#5a5a5a"
                                                d="M375.148 483.266v16.195a4.998 4.998 0 0 1-4.996 4.996H352.52v-21.191c0-10.97-8.903-19.871-19.872-19.871h22.63c10.972 0 19.87 8.898 19.87 19.87zm0 0"
                                                opacity="1" data-original="#5a5a5a"></path>
                                            <path fill="#64dcfc"
                                                d="M295.477 275.613h162.257v30.754H295.477zM295.477 357.273h162.257v30.758H295.477zm0 0"
                                                opacity="1" data-original="#64dcfc"></path>
                                            <path fill="#00d1fc"
                                                d="M438.55 275.613h19.184v30.754h-19.183zM438.55 357.273h19.184v30.758h-19.183zm0 0"
                                                opacity="1" data-original="#00d1fc"></path>
                                            <g fill="#0396fd">
                                                <path
                                                    d="M471.172 275.613H282.043c-4 0-7.246-3.242-7.246-7.242v-36.418c0-4 3.246-7.246 7.246-7.246h189.129c4 0 7.246 3.246 7.246 7.246v36.418c0 4-3.246 7.242-7.246 7.242zM471.172 357.273H282.043c-4 0-7.246-3.242-7.246-7.242v-36.418c0-4 3.246-7.246 7.246-7.246h189.129c4 0 7.246 3.246 7.246 7.246v36.418c0 4-3.246 7.242-7.246 7.242zM471.172 438.934H282.043c-4 0-7.246-3.243-7.246-7.243v-36.418a7.246 7.246 0 0 1 7.246-7.246h189.129c4 0 7.246 3.243 7.246 7.246v36.418c0 4-3.246 7.243-7.246 7.243zm0 0"
                                                    fill="#0396fd" opacity="1" data-original="#0396fd"></path>
                                            </g>
                                            <path fill="#0077f0"
                                                d="M478.414 231.953v36.418a7.24 7.24 0 0 1-7.242 7.242h-16.805a7.24 7.24 0 0 0 7.242-7.242v-36.418a7.24 7.24 0 0 0-7.242-7.242h16.805a7.24 7.24 0 0 1 7.242 7.242zM478.414 313.61v36.417a7.234 7.234 0 0 1-7.242 7.243h-16.805a7.234 7.234 0 0 0 7.242-7.243V313.61a7.24 7.24 0 0 0-7.242-7.242h16.805a7.24 7.24 0 0 1 7.242 7.242zM478.414 395.277v36.414a7.243 7.243 0 0 1-7.242 7.247h-16.805a7.243 7.243 0 0 0 7.242-7.247v-36.414a7.235 7.235 0 0 0-7.242-7.246h16.805a7.235 7.235 0 0 1 7.242 7.246zm0 0"
                                                opacity="1" data-original="#0077f0"></path>
                                            <path fill="#ff6b81"
                                                d="M69.758 51.25c0 8.008-6.488 14.5-14.496 14.5s-14.496-6.492-14.496-14.5c0-8.004 6.488-14.496 14.496-14.496s14.496 6.492 14.496 14.496zm0 0"
                                                opacity="1" data-original="#ff6b81"></path>
                                            <path fill="#ffd86e"
                                                d="M125.746 51.25c0 8.008-6.492 14.5-14.496 14.5-8.008 0-14.5-6.492-14.5-14.5 0-8.004 6.492-14.496 14.5-14.496 8.004 0 14.496 6.492 14.496 14.496zm0 0"
                                                opacity="1" data-original="#ffd86e"></path>
                                            <path fill="#80e0dc"
                                                d="M181.73 51.25c0 8.008-6.488 14.5-14.496 14.5-8.004 0-14.496-6.492-14.496-14.5 0-8.004 6.492-14.496 14.496-14.496 8.008 0 14.496 6.492 14.496 14.496zm0 0"
                                                opacity="1" data-original="#80e0dc"></path>
                                            <path fill="#ff435f"
                                                d="M69.754 51.258c0 8-6.484 14.484-14.488 14.484-3.875 0-7.403-1.52-10-4.004 7.843-.172 14.156-6.586 14.156-14.476 0-4.137-1.727-7.856-4.496-10.492.113-.012.23-.012.34-.012 8.004 0 14.488 6.484 14.488 14.5zm0 0"
                                                opacity="1" data-original="#ff435f"></path>
                                            <path fill="#ffb509"
                                                d="M125.742 51.258c0 8-6.484 14.484-14.496 14.484-3.875 0-7.394-1.52-10-4.004 7.852-.172 14.168-6.586 14.168-14.476 0-4.137-1.73-7.856-4.496-10.492.11-.012.219-.012.328-.012 8.012 0 14.496 6.484 14.496 14.5zm0 0"
                                                opacity="1" data-original="#ffb509"></path>
                                            <path fill="#00a8b0"
                                                d="M181.734 51.258c0 8-6.496 14.484-14.5 14.484-3.875 0-7.39-1.52-10-4.004 7.856-.172 14.157-6.586 14.157-14.476 0-4.137-1.727-7.856-4.496-10.492.113-.012.23-.012.34-.012 8.003 0 14.5 6.484 14.5 14.5zm0 0"
                                                opacity="1" data-original="#00a8b0"></path>
                                            <path
                                                d="M58.96 187.047a7.472 7.472 0 0 0 5.298 2.195 7.495 7.495 0 0 0 5.3-12.793l-18.195-18.195 18.196-18.191a7.495 7.495 0 0 0-10.598-10.598l-23.492 23.492a7.493 7.493 0 0 0 0 10.598zM133.32 158.254l-18.195 18.195a7.491 7.491 0 0 0 .004 10.598c1.46 1.46 3.379 2.195 5.297 2.195s3.836-.734 5.297-2.195l23.496-23.496a7.49 7.49 0 0 0 0-10.594l-23.496-23.496a7.49 7.49 0 0 0-10.594 0 7.488 7.488 0 0 0 0 10.598zM81.172 188.723c.898.351 1.828.52 2.738.52a7.498 7.498 0 0 0 6.977-4.755l18.457-46.988a7.492 7.492 0 1 0-13.945-5.48l-18.462 46.988c-1.511 3.851.383 8.203 4.235 9.715zM45.008 233.203h50.48a7.494 7.494 0 0 0 0-14.988h-50.48a7.491 7.491 0 0 0-7.492 7.492 7.492 7.492 0 0 0 7.492 7.496zM211.754 218.215h-88.75a7.494 7.494 0 0 0 0 14.988h88.75a7.495 7.495 0 1 0 0-14.988zM45.008 264.809h21.504a7.494 7.494 0 0 0 0-14.989H45.008a7.491 7.491 0 0 0-7.492 7.493 7.492 7.492 0 0 0 7.492 7.496zM184.34 249.82a7.491 7.491 0 0 0-7.492 7.493 7.492 7.492 0 0 0 7.492 7.496h13.094a7.495 7.495 0 1 0 0-14.989zM164.617 257.313a7.494 7.494 0 0 0-7.492-7.493h-64.32a7.491 7.491 0 0 0-7.493 7.493 7.492 7.492 0 0 0 7.493 7.496h64.32a7.494 7.494 0 0 0 7.492-7.496zM213.703 257.313a7.494 7.494 0 0 0 7.492 7.496h24.528a7.495 7.495 0 1 0 0-14.989h-24.528a7.494 7.494 0 0 0-7.492 7.493zM172.895 164.266h25.87a7.495 7.495 0 1 0 0-14.989h-25.87a7.494 7.494 0 1 0 0 14.989zM227.742 164.266h157.856a7.492 7.492 0 0 0 7.492-7.496 7.491 7.491 0 0 0-7.492-7.493H227.742a7.494 7.494 0 1 0 0 14.989zM361.621 182.246h-63.945a7.494 7.494 0 0 0 0 14.988h63.945a7.494 7.494 0 0 0 0-14.988zM273.7 182.246h-21.981a7.492 7.492 0 0 0-7.492 7.496 7.491 7.491 0 0 0 7.492 7.492h21.98a7.491 7.491 0 0 0 7.492-7.492 7.492 7.492 0 0 0-7.492-7.496zM172.895 197.234h53.847a7.494 7.494 0 0 0 0-14.988h-53.847a7.495 7.495 0 1 0 0 14.988zM157.219 281.16h-50.477a7.494 7.494 0 0 0-7.496 7.492 7.494 7.494 0 0 0 7.496 7.493h50.477a7.494 7.494 0 0 0 7.492-7.493 7.494 7.494 0 0 0-7.492-7.492zM83.79 281.16H45.007a7.491 7.491 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493h38.781a7.491 7.491 0 0 0 7.492-7.493 7.491 7.491 0 0 0-7.492-7.492zM248.723 281.16H182.78a7.491 7.491 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493h65.942a7.494 7.494 0 0 0 7.492-7.493 7.494 7.494 0 0 0-7.492-7.492zM337.898 242.668H301.84a7.494 7.494 0 0 0 0 14.988h36.058a7.492 7.492 0 0 0 7.493-7.496 7.491 7.491 0 0 0-7.493-7.492zM400.469 257.656h50.902a7.495 7.495 0 1 0 0-14.988H400.47a7.491 7.491 0 0 0-7.492 7.492 7.494 7.494 0 0 0 7.492 7.496zM375.016 242.668h-11.664a7.494 7.494 0 1 0 0 14.988h11.664a7.492 7.492 0 0 0 7.492-7.496 7.491 7.491 0 0 0-7.492-7.492zM301.84 339.313h36.058a7.489 7.489 0 0 0 7.493-7.493 7.491 7.491 0 0 0-7.493-7.492H301.84a7.494 7.494 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493zM400.469 339.313h50.902a7.492 7.492 0 1 0 0-14.985H400.47a7.491 7.491 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.493zM363.352 339.313h11.664a7.492 7.492 0 1 0 0-14.985h-11.664a7.491 7.491 0 0 0-7.493 7.492 7.489 7.489 0 0 0 7.493 7.493zM337.898 405.988H301.84c-4.137 0-7.492 3.356-7.492 7.492s3.355 7.493 7.492 7.493h36.058c4.141 0 7.493-3.356 7.493-7.493s-3.352-7.492-7.493-7.492zM451.371 405.988H400.47c-4.14 0-7.492 3.356-7.492 7.492s3.351 7.493 7.492 7.493h50.902c4.14 0 7.496-3.356 7.496-7.493s-3.355-7.492-7.496-7.492zM375.016 405.988h-11.664c-4.141 0-7.497 3.356-7.497 7.492s3.356 7.493 7.497 7.493h11.664c4.14 0 7.492-3.356 7.492-7.493s-3.352-7.492-7.492-7.492zm0 0"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M479.023.5H32.98C14.797.5 0 15.293 0 33.48v362.567c0 18.183 14.797 32.976 32.98 32.976h28.2a7.491 7.491 0 0 0 7.492-7.492 7.494 7.494 0 0 0-7.492-7.492h-28.2c-9.921 0-17.992-8.07-17.992-17.992V367.62h272.996v12.914h-5.941c-8.129 0-14.738 6.61-14.738 14.738v18.766H106.738a7.494 7.494 0 0 0-7.492 7.492 7.491 7.491 0 0 0 7.492 7.492h72.047v26.875H156.16c-15.094 0-27.37 12.282-27.37 27.372v16.187c0 6.887 5.6 12.488 12.487 12.488h228.875c6.887 0 12.489-5.601 12.489-12.488V483.27c0-15.09-12.278-27.372-27.371-27.372h-22.625v-9.472h138.527c8.125 0 14.734-6.61 14.734-14.739v-3.527c14.606-3.39 25.524-16.496 25.524-32.113l.566-362.57C512 15.293 497.207.5 479.023.5zm-196.73 349.281v-35.918h188.629v35.918zm20.676-50.906v-15.766h147.273v15.766zm147.273 65.89v15.77H302.97v-15.77zM193.77 429.024h73.535v2.668c0 8.125 6.61 14.735 14.738 14.735h35.617v9.472H193.77zm161.503 41.864c6.829 0 12.383 5.554 12.383 12.383v13.69H143.773v-13.69c0-6.829 5.559-12.383 12.387-12.383zm115.649-39.45H282.293v-35.914h188.629zm25.523-35.39c0 7.258-4.328 13.512-10.535 16.351V395.27c0-8.125-6.613-14.735-14.738-14.735h-5.942v-12.914h31.215zm0-43.41h-10.78c.151-.848.245-39.024.245-39.024 0-8.129-6.613-14.738-14.738-14.738h-5.942v-15.766h5.942c8.125 0 14.738-6.613 14.738-14.738v-36.418c0-8.125-6.613-14.738-14.738-14.738h-42.324a7.492 7.492 0 0 0-7.493 7.496 7.491 7.491 0 0 0 7.493 7.492h42.074v35.918H282.293v-35.918h99.93a7.491 7.491 0 0 0 7.492-7.492 7.492 7.492 0 0 0-7.492-7.496h-100.18c-8.129 0-14.738 6.613-14.738 14.738v36.418c0 8.125 6.61 14.738 14.738 14.738h5.941v15.766h-5.941c-8.129 0-14.738 6.613-14.738 14.738 0 0 .093 38.176.246 39.024H14.988V102.43h481.457zm0-265.196H15.54V33.477c0-9.918 8.07-17.989 17.992-17.989h444.922c9.922 0 17.992 8.07 17.992 17.992zm0 0"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M55.262 29.262c-12.125 0-21.989 9.863-21.989 21.988s9.864 21.992 21.989 21.992 21.992-9.867 21.992-21.992-9.867-21.988-21.992-21.988zm0 28.992c-3.86 0-7.004-3.14-7.004-7.004 0-3.86 3.144-7.004 7.004-7.004 3.863 0 7.004 3.145 7.004 7.004a7.01 7.01 0 0 1-7.004 7.004zM111.25 29.262c-12.125 0-21.992 9.863-21.992 21.988s9.867 21.992 21.992 21.992 21.988-9.867 21.988-21.992-9.867-21.988-21.988-21.988zm0 28.992a7.01 7.01 0 0 1-7.004-7.004c0-3.86 3.14-7.004 7.004-7.004 3.86 0 7.004 3.145 7.004 7.004 0 3.863-3.145 7.004-7.004 7.004zM167.234 29.262c-12.125 0-21.988 9.863-21.988 21.988s9.863 21.992 21.988 21.992 21.993-9.867 21.993-21.992-9.868-21.988-21.993-21.988zm0 28.992c-3.859 0-7.004-3.14-7.004-7.004 0-3.86 3.145-7.004 7.004-7.004 3.864 0 7.004 3.145 7.004 7.004a7.01 7.01 0 0 1-7.004 7.004zm0 0"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                    <h4 class="font-weight-bold mt-3">
                                        T. Rekayasa Perangkat Lunak
                                    </h4>
                                    <p class="mb-0 text-justify hidden-text">
                                        Program Studi Teknologi Rekayasa Perangkat Lunak dirancang lulusannya memiliki
                                        kemampuan dibidang kecerdasan buatan.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5 position-relative bg-gradient-dark mx-n3" id="berita">
            <div class="container py-5">

                <div class="header-berita text-center">
                    <h2 class="fw-bold" style="color: white">Berita Terkini Di HIMATIKOM</h2>
                </div>

                <div class="row py-5" data-aos="flip-up">
                    @foreach ($beritas as $berita)
                        <div class="col-lg-4 mb-4">

                            <div class="card border-0 shadow-sm h-100 hovered-effect">

                                <div class="position-relative overflow-hidden">

                                    <img src="{{ asset('storage/artikel/' . $berita->foto) }}"
                                        class="img-fluid rounded-3 w-100 h-100 zoom-effect" alt="{{ $berita->judul }}"
                                        style="object-fit: cover; max-height: 250px;">

                                </div>

                                <div class="card-body">

                                    <p class="text-muted small mb-2">{{ $berita->created_at->format('d M Y') }}</p>

                                    <h5 class="fw-bold mb-3">{{ $berita->judul }}</h5>

                                    <a href="/detail/{{ $berita->slug }}"
                                        class="text-decoration-none text-danger fw-bold">

                                        Ke Halaman >>

                                    </a>

                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="footer-berita text-center">
                    <a href="/berita" class="btn btn-danger btn-outline-danger">Berita Lainnya</a>
                </div>
            </div>
        </section>




        <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
        <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <div class="card shadow-none">
                            <div class="card-header text-center">
                                <h2 class="fw-bold">Fasilitas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 col-lg-5  ms-auto mt-lg-0 mt-4">
                            <div class="card shadow-xl h-100 px-6 py-6 outline">
                                <div class="card-body text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="158" height="158" x="0"
                                        y="0" viewBox="0 0 96 96" style="enable-background:new 0 0 158 158"
                                        xml:space="preserve">
                                        <g>
                                            <path fill="#d9b18c"
                                                d="M66.7 76.54h15.75a2 2 0 0 1 2 2v2H64.73v-2a2 2 0 0 1 1.97-2z"
                                                opacity="1" data-original="#d9b18c"></path>
                                            <path fill="#8a6762" d="M56.86 63.75h35.43v3.94H56.86z" opacity="1"
                                                data-original="#8a6762"></path>
                                            <path fill="#cba07a"
                                                d="M83.43 61.78v7.87H65.72v-7.87a3.94 3.94 0 0 1 3-3.84 4.24 4.24 0 0 1 .88-.1h9.9a3.93 3.93 0 0 1 3.93 3.94z"
                                                opacity="1" data-original="#cba07a"></path>
                                            <path fill="#d9b18c"
                                                d="M83.43 61.78v4.92h-8.86a5.9 5.9 0 0 1-5.9-5.91v-2a4.33 4.33 0 0 1 .1-.89 4.24 4.24 0 0 1 .88-.1h9.85a3.93 3.93 0 0 1 3.93 3.98zM13.55 76.54H29.3a2 2 0 0 1 2 2v2H11.58v-2a2 2 0 0 1 1.97-2z"
                                                opacity="1" data-original="#d9b18c"></path>
                                            <path fill="#8a6762" d="M3.71 63.75h35.43v3.94H3.71z" opacity="1"
                                                data-original="#8a6762"></path>
                                            <path fill="#cba07a"
                                                d="M30.28 61.78v7.87H12.57v-7.87a3.94 3.94 0 0 1 3-3.84 4.24 4.24 0 0 1 .88-.1h9.85a3.93 3.93 0 0 1 3.98 3.94z"
                                                opacity="1" data-original="#cba07a"></path>
                                            <path fill="#d9b18c"
                                                d="M30.28 61.78v4.92h-8.85a5.9 5.9 0 0 1-5.91-5.91v-2a4.33 4.33 0 0 1 .1-.89 4.24 4.24 0 0 1 .88-.1h9.85a3.93 3.93 0 0 1 3.93 3.98z"
                                                opacity="1" data-original="#d9b18c"></path>
                                            <path fill="#8a6762" d="M8.63 1.74h78.74v51.18H8.63z" opacity="1"
                                                data-original="#8a6762"></path>
                                            <path fill="#62b28a" d="M12.57 5.68h70.86v43.31H12.57z" opacity="1"
                                                data-original="#62b28a"></path>
                                            <path fill="#75be9a"
                                                d="M83.43 5.68V46h-56.1a11.81 11.81 0 0 1-11.81-11.78V5.68z" opacity="1"
                                                data-original="#75be9a"></path>
                                            <path fill="#85cba9"
                                                d="M50 8.63h28.51a2 2 0 0 1 2 2v31.46a2 2 0 0 1-2 2A30.51 30.51 0 0 1 48 13.55v-3a2 2 0 0 1 2-2z"
                                                opacity="1" data-original="#85cba9"></path>
                                            <path fill="#c6ccda"
                                                d="M65.72 44.06h7.87a2 2 0 0 1 2 2v3H63.75V46a2 2 0 0 1 1.97-1.94z"
                                                opacity="1" data-original="#c6ccda"></path>
                                            <g fill="#39426a">
                                                <path
                                                    d="M41.11 62.76h-9.84v-1a4.93 4.93 0 0 0-4.92-4.92H16.5a4.93 4.93 0 0 0-4.92 4.92v1H1.74a1 1 0 0 0 0 2h1v3a1 1 0 0 0 1 1h1v25.5a1 1 0 0 0 2 0V68.67h4.92v1a1 1 0 0 0 1 1h3.84v4.92h-2.95a3 3 0 0 0-3 3v2a1 1 0 0 0 1 1h2v12.8a1 1 0 0 0 2 0V81.46h11.78v12.8a1 1 0 0 0 2 0v-12.8h2a1 1 0 0 0 1-1v-2a3 3 0 0 0-2.95-3h-3.03v-4.82h3.93a1 1 0 0 0 1-1v-1h4.92v25.62a1 1 0 0 0 2 0V68.67h1a1 1 0 0 0 1-1v-3h1a1 1 0 0 0 0-2zM4.69 66.7v-2h6.89v2zm25.59 11.81v1H12.57v-1a1 1 0 0 1 1-1H29.3a1 1 0 0 1 .98 1zm-5.9-3h-5.91v-4.87h5.91zm4.92-6.89h-2.95v-4.87a1 1 0 1 0-2 0v4.92h-5.88v-4.92a1 1 0 1 0-2 0v4.92h-2.92v-6.89a3 3 0 0 1 2.95-3h9.85a3 3 0 0 1 2.95 3zm8.86-2h-6.89v-2h6.89zM94.26 62.76h-9.84v-1a4.93 4.93 0 0 0-4.92-4.92h-9.85a4.93 4.93 0 0 0-4.92 4.92v1h-9.84a1 1 0 0 0 0 2h1v3a1 1 0 0 0 1 1h1v25.5a1 1 0 0 0 2 0V68.67h4.92v1a1 1 0 0 0 1 1h3.93v4.92h-3a3 3 0 0 0-3 3v2a1 1 0 0 0 1 1h2v12.8a1 1 0 0 0 2 0V81.46h11.74v12.8a1 1 0 0 0 2 0v-12.8h2a1 1 0 0 0 1-1v-2a3 3 0 0 0-3-3h-3v-4.82h3.93a1 1 0 0 0 1-1v-1h4.92v25.62a1 1 0 0 0 2 0V68.67h1a1 1 0 0 0 1-1v-3h1a1 1 0 0 0 0-2zM57.84 66.7v-2h6.89v2zm25.59 11.81v1H65.72v-1a1 1 0 0 1 1-1h15.73a1 1 0 0 1 .98 1zm-5.9-3h-5.91v-4.87h5.91zm4.92-6.89h-3v-4.87a1 1 0 1 0-2 0v4.92h-5.83v-4.92a1 1 0 1 0-2 0v4.92h-3v-6.89a3 3 0 0 1 3-3h9.88a3 3 0 0 1 3 3zm8.86-2h-6.89v-2h6.89zM8.63 53.91h78.74a1 1 0 0 0 1-1V1.74a1 1 0 0 0-1-1H8.63a1 1 0 0 0-1 1v51.18a1 1 0 0 0 1 .99zm1-51.18h76.75v49.21H9.62z"
                                                    fill="#39426a" opacity="1" data-original="#39426a"></path>
                                                <path
                                                    d="M83.43 4.69H12.57a1 1 0 0 0-1 1V49a1 1 0 0 0 1 1h70.86a1 1 0 0 0 1-1V5.68a1 1 0 0 0-1-.99zM64.73 48v-1.48a1.47 1.47 0 0 1 1.48-1.47h6.89a1.47 1.47 0 0 1 1.47 1.47V48zm17.72 0h-5.91v-1.48a3.44 3.44 0 0 0-3.44-3.44h-6.89a3.45 3.45 0 0 0-3.45 3.44V48H13.55V6.66h68.9z"
                                                    fill="#39426a" opacity="1" data-original="#39426a"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <h4 class="font-weight-bold mt-3">
                                        KELAS
                                    </h4>
                                    <p class="mb-0 text-center">
                                        Pada Tahun 2024 Gedung JTIK, Memiliki 5 Kelas Teori
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5  ms-auto mt-lg-0 mt-4">
                            <div class="card shadow-xl h-100 px-6 py-6 outline">
                                <div class="card-body text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="158" height="158" x="0"
                                        y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 158 158"
                                        xml:space="preserve">
                                        <g>
                                            <path fill="#ffdb80"
                                                d="M124 108v14.01a1.997 1.997 0 0 1-2 1.99H96.25a2.274 2.274 0 0 1-2.25-2.06V108zM94 88h30v16H94zM94 68v16h30V68zm17 10h-4a2 2 0 0 1 0-4h4a2 2 0 0 1 0 4z"
                                                opacity="1" data-original="#ffdb80"></path>
                                            <path fill="#d68751"
                                                d="M82 4v40h20V4zm10 34a2 2 0 1 1 2-2 2.006 2.006 0 0 1-2 2z"
                                                opacity="1" data-original="#d68751"></path>
                                            <path fill="#2d4356"
                                                d="M122 52H6a6.003 6.003 0 0 0-6 5.99v64.02A6.003 6.003 0 0 0 6 128h17.5c3.19 0 5.5-2.55 5.5-6.06V98.69h61v23.25a6.235 6.235 0 0 0 6.25 6.06H122a6.003 6.003 0 0 0 6-5.99V57.99a6.003 6.003 0 0 0-6-5.99zM90 94.69H28a3.013 3.013 0 0 0-3 3.02v24.23c0 .35-.07 2.06-1.5 2.06H6a1.997 1.997 0 0 1-2-1.99V68h86zm34 27.32a1.997 1.997 0 0 1-2 1.99H96.25a2.274 2.274 0 0 1-2.25-2.06V108h30zm0-18.01H94V88h30zm0-20H94V68h30zm0-20H4v-6.01A1.997 1.997 0 0 1 6 56h116a1.997 1.997 0 0 1 2 1.99z"
                                                opacity="1" data-original="#2d4356"></path>
                                            <path fill="#d68751"
                                                d="M124 57.99V64H4v-6.01A1.997 1.997 0 0 1 6 56h116a1.997 1.997 0 0 1 2 1.99z"
                                                opacity="1" data-original="#d68751"></path>
                                            <path fill="#e1ebf4"
                                                d="M90 68v26.69H28a3.013 3.013 0 0 0-3 3.02v24.23c0 .35-.07 2.06-1.5 2.06H6a1.997 1.997 0 0 1-2-1.99V68z"
                                                opacity="1" data-original="#e1ebf4"></path>
                                            <g fill="#2d4356">
                                                <path
                                                    d="M113 76a2.006 2.006 0 0 1-2 2h-4a2 2 0 0 1 0-4h4a2.006 2.006 0 0 1 2 2zM106 98h4a2 2 0 0 0 0-4h-4a2 2 0 0 0 0 4zM106 118h4a2 2 0 0 0 0-4h-4a2 2 0 0 0 0 4zM67.74 0H20.26A4.095 4.095 0 0 0 16 3.89v32.22A4.095 4.095 0 0 0 20.26 40H38v4h-3a2 2 0 0 0 0 4h18a2 2 0 0 0 0-4h-3v-4h17.74A4.095 4.095 0 0 0 72 36.11V3.89A4.095 4.095 0 0 0 67.74 0zM46 44h-4v-4h4zm22-8.05a.695.695 0 0 1-.26.05H20.26a.695.695 0 0 1-.26-.05V4.05a.695.695 0 0 1 .26-.05h47.48a.695.695 0 0 1 .26.05z"
                                                    fill="#2d4356" opacity="1" data-original="#2d4356"></path>
                                            </g>
                                            <path fill="#e1ebf4"
                                                d="M68 4.05v31.9a.695.695 0 0 1-.26.05H20.26a.695.695 0 0 1-.26-.05V4.05a.695.695 0 0 1 .26-.05h47.48a.695.695 0 0 1 .26.05z"
                                                opacity="1" data-original="#e1ebf4"></path>
                                            <path fill="#2d4356"
                                                d="M102 0H82a3.999 3.999 0 0 0-4 4v40a3.999 3.999 0 0 0 4 4h20a3.999 3.999 0 0 0 4-4V4a3.999 3.999 0 0 0-4-4zm0 44H82V4h20z"
                                                opacity="1" data-original="#2d4356"></path>
                                            <path fill="#2d4356"
                                                d="M94 10h-4a2 2 0 0 0 0 4h4a2 2 0 0 0 0-4zM94 20h-4a2 2 0 0 0 0 4h4a2 2 0 0 0 0-4z"
                                                opacity="1" data-original="#2d4356"></path>
                                            <circle cx="92" cy="36" r="2" fill="#2d4356" opacity="1"
                                                data-original="#2d4356"></circle>
                                            <path fill="#9fa5aa50"
                                                d="M25 119.94v2c0 .35-.07 2.06-1.5 2.06H6a1.997 1.997 0 0 1-2-1.99v-2A1.997 1.997 0 0 0 6 122h17.5c1.43 0 1.5-1.71 1.5-2.06zM90 92.69v2H28a3.013 3.013 0 0 0-3 3.02v-2a3.013 3.013 0 0 1 3-3.02z"
                                                opacity="1" data-original="#9fa5aa50"></path>
                                            <path fill="#ad935945"
                                                d="M124 120.01v2a1.997 1.997 0 0 1-2 1.99H96.25a2.274 2.274 0 0 1-2.25-2.06v-2a2.274 2.274 0 0 0 2.25 2.06H122a1.997 1.997 0 0 0 2-1.99z"
                                                opacity="1" data-original="#ad935945"></path>
                                            <path fill="#e5d0c330"
                                                d="M124 57.99v2a1.997 1.997 0 0 0-2-1.99H6a1.997 1.997 0 0 0-2 1.99v-2A1.997 1.997 0 0 1 6 56h116a1.997 1.997 0 0 1 2 1.99z"
                                                opacity="1" data-original="#e5d0c330"></path>
                                            <path fill="#9fa5aa50"
                                                d="M68 33.95v2a.695.695 0 0 1-.26.05H20.26a.695.695 0 0 1-.26-.05v-2a.695.695 0 0 0 .26.05h47.48a.695.695 0 0 0 .26-.05z"
                                                opacity="1" data-original="#9fa5aa50"></path>
                                            <path fill="#fff"
                                                d="M68 4.05v2a.695.695 0 0 0-.26-.05H20.26a.695.695 0 0 0-.26.05v-2a.695.695 0 0 1 .26-.05h47.48a.695.695 0 0 1 .26.05z"
                                                opacity=".5"></path>
                                            <path fill="#e5d0c3" d="M82 4h20v2H82z" opacity=".3"></path>
                                            <path fill="#72492d" d="M82 42h20v2H82z" opacity=".4"></path>
                                        </g>
                                    </svg>
                                    <h4 class="font-weight-bold mt-3">
                                        LABORATORIUM
                                    </h4>
                                    <p class="mb-0 text-center">
                                        Pada Tahun 2024 Gedung JTIK, Memiliki 5 Laboratorium Praktik
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5 position-relative bg-gradient-dark mx-n3">
            <div class="container py-5">

                <div class="header-berita text-center">
                    <h2 class="fw-bold" style="color: white">Lokasi Kampus</h2>
                </div>

                <!-- Google Maps Embed -->
                <div class="maps-embed text-center my-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.649276950203!2d107.82526711200764!3d-6.56587569339995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693b9ae39cc0eb%3A0x76db7b3959df2011!2sPoliteknik%20Negeri%20Subang%2C%20Kampus%20Utama%20Cibogo!5e0!3m2!1sid!2sid!4v1726531188919!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0; border-radius: 20px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="footer-berita text-center">
                    <a href="https://maps.app.goo.gl/QtSXVedPVkS51NjF6" target="_blank"
                        class="btn btn-danger btn-outline-danger">Lihat di Maps</a>
                </div>
            </div>
        </section>

        <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    </div>
@endsection
