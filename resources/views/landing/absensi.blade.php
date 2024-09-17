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
                    <h2 class="text-dark text-center">Absensi Program Kerja atau Agenda</h2>
                    <div
                        id="canvas_camera"
                        style="border-radius: 16px"
                        class="my-3"
                    ></div>
                    <div class="d-grid">
                        <button
                            class="btn btn-success"
                            onclick="handleOpenCamera()"
                        >Mulai</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    let html5CodeScanner = new Html5QrcodeScanner(
        "canvas_camera", {
            fps: 30,
            qrbox: 300
            }
        )
    function handleOpenCamera() {
        html5CodeScanner.render(onScanSuccess)
    }

    function onScanError(errorMessage) {
    // handle on error condition, with error message
    console.log(`Error: ${errorMessage}`)
    }

    function onScanSuccess(decodedText, decodedResult) {
        console.log(`Scan Result : OK`)
        $.ajax({
            url: `{{ config('app.url') }}/proker-agenda/absensi/store/${decodedText}`,
            method: `POST`,
            data: {
                _token: `{{ csrf_token() }}`
            },
            success: function(result) {
                Swal.fire({
                    title: result.title,
                    icon: result.icon,
                    text: result.text
                }).then((res) => {
                    if (res.isConfirmed) {
                        window.location.reload()
                    }
                })
            },
            error: function(error) {
                console.error(error)
            }
        })
        html5CodeScanner.clear()
    }
</script>
@endsection
