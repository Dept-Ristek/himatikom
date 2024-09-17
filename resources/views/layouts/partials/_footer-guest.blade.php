<footer class="footer mt-5" style="background-image: url('{{ asset('icon/Footer_N.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Logo POLSUB dan HIMATIKOM -->
                    <div class="d-flex align-items-center">
                        <a href="#">
                            <img
                                src="{{ asset('icon/logo-himpunan.png') }}"
                                class="mb-3 footer-logo"
                                alt="second_logo"
                                style="height: 40px; width: auto;"
                            >
                        </a>
                    </div>

                    <!-- Teks di tengah -->
                    <h6 class="font-weight-bolder text-center">
                        HIMATIKOM | POLSUB
                    </h6>

                    <!-- Ikon media sosial di sebelah kanan -->
                    <div class="d-flex">
                        <ul class="d-flex flex-row nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link pe-1"
                                    href="https://www.instagram.com/politekniknegerisubang/"
                                    target="_blank"
                                >
                                    <i class="fab fa-instagram text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link pe-1"
                                    href="https://web.facebook.com/Politekniksubang/"
                                    target="_blank"
                                >
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link pe-1"
                                    href="https://www.youtube.com/@PoliteknikNegeriSubang"
                                    target="_blank"
                                >
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Hak Cipta di bawah -->
            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark text-sm font-weight-normal">
                        All rights reserved. Copyright © {{ date('Y') }} HIMATIKOM POLSUB by 
                        <a href="https://github.com/Dept-Ristek" target="_blank">Departemen Riset dan Teknologi</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
