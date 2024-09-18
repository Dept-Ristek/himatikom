@extends('layouts._default.guest')
@section('content')
<!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>
    <div
        class="page-header min-height-400"
        style="background-image: url('{{ asset('icon/Dashboard.jpg') }}');"
        loading="lazy"
    >
        <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
</header>
<!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="mt-n8 mt-md-n9 text-center">
                        <img
                            class="avatar avatar-xxl shadow-xl position-relative z-index-2 bg-white"
                            src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('icon/default.png') }}"
                            alt="bruce"
                            loading="lazy"
                        >
                    </div>
                    <div class="row py-5">
                        <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="mb-0">{{ auth()->user()->name }} ({{ auth()->user()->nim }})</h3>
                            </div>
                            <div class="row mb-4">
                                <div class="col-auto">
                                    <span class="h6">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                    <span>{{ auth()->user()->email }}</span>
                                </div>
                                <div class="col-auto">
                                    <span class="h6">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <span>{{ auth()->user()->phone ?? 'Belum ada' }}</span>
                                </div>
                            </div>
                            <p class="text-lg mb-0">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim excepturi quaerat
                                repudiandae commodi, consectetur esse veritatis perferendis vitae obcaecati iusto
                                reiciendis rerum nulla sequi qui blanditiis. Provident ipsam perspiciatis nobis debitis
                                esse dolores! Pariatur ipsum itaque earum, aut accusantium commodi eveniet, nam id
                                veritatis adipisci quod tempora cumque facere dolorum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-5">Aktivitas</h3>
                </div>
            </div>
            <div class="row">
                <h2 class="text-secondary">Belum ada</h2>
            </div>
        </div>
    </section>
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
</div>
@endsection
