@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-6 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Form Tambah Program Kerja</div>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('proker-agenda.proker.store') }}"
                        method="post"
                    >
                        @csrf
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="name"
                                        class="form-label"
                                    >Nama Acara</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        readonly
                                        value="{{ $proker->name }}"
                                    >
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="event_day"
                                        class="form-label"
                                    >Tanggal Dilaksanakan</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        value="{{ $proker->event_day }}"
                                        readonly
                                    >
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="name"
                                        class="form-label"
                                    >Nama Acara</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        readonly
                                        value="{{ $proker->biro_department->name }}"
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </form>
                </div>
            </div>
            <!-- Card end -->

        </div>
        <div class="col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Generate QR Code Absensi</div>
                </div>
                <div class="card-body">
                    <div
                        id="qrcode_canvas"
                        class="my-3 d-flex justify-content-center"
                    ></div>
                    <a
                        onclick="handleQRCode('{{ $proker->uuid }}')"
                        class="btn btn-sm btn-success"
                    >Generate</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->

<script>
    new DataTable('#table_user');

    function handleQRCode(uuid) {
        let qrcode = new QRCode('qrcode_canvas', {
                        text: uuid,
                        width: 300,
                        height: 300,
                        colorDark : "#000000",
                        colorLight : "#ffffff",
                        correctLevel : QRCode.CorrectLevel.H
                    })
    }
</script>

@endsection
