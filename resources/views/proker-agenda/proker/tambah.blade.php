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
                        <form action="{{ route('proker-agenda.proker.store') }}" method="post">
                            @csrf
                            <!-- Row start -->
                            <div class="row">
                                <div class="col-xl-12 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Acara <small
                                                class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Masukkan nama lengkap">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="event_day" class="form-label">Tanggal Dilaksanakan</label>
                                        <input type="date" class="form-control" id="event_day" name="event_day"
                                            placeholder="Masukkan alamat email">
                                        <small class="text-dark">Anda dapat mengosongkan bagian ini apabila belum
                                            menemukan tanggal yang tepat</small>
                                        @error('event_day')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="biro_department_id" class="form-label">Biro / Department<small
                                                class="text-danger">*</small></label>
                                        <select class="form-select" id="biro_department_id" name="biro_department_id">
                                            <option value="pilih">--Pilih--</option>
                                            @foreach ($biro_departments as $key => $biro_department)
                                                <option value="{{ $biro_department->id }}">{{ $biro_department->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('biro_department_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-actions-footer">
                                        <a href="{{ route('user.user-anggota') }}" class="btn btn-light">Batalkan</a>
                                        <button class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </form>
                    </div>
                </div>
                <!-- Card end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

    <script>
        new DataTable('#table_user');
    </script>
@endsection
