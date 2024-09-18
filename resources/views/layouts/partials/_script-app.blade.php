<!-- *************
			************ Required JavaScript Files *************
		************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{ asset('arise/design') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('arise/design') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('arise/design') }}/assets/js/modernizr.js"></script>
<script src="{{ asset('arise/design') }}/assets/js/moment.js"></script>

<!-- *************
			************ Vendor Js Files *************
		************* -->

<!-- Overlay Scroll JS -->
<script src="{{ asset('arise/design') }}/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('arise/design') }}/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>


<!-- Main Js Required -->
<script src="{{ asset('arise/design') }}/assets/js/main.js"></script>

@if (Session::get('text'))
<script>
    Swal.fire({
        title: `{{ Session::get('title') }}`,
        icon: `{{ Session::get('icon') }}`,
        text: `{{ Session::get('text') }}`
    })
</script>
@endif

<script>
    function handleLogout()
    {
        Swal.fire({
        title: "Meninggalkan sesi",
        text: "Apakah anda meninggalkan sesi?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Logout!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `{{ route('logout') }}`
            }
        });
    }
</script>
