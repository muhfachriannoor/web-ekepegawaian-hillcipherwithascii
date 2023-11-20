@extends('admin/templatedashboard')
@section('cssfile')
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data PNS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('data-pns.index') }}">Data PNS</a></li>
                        <li class="breadcrumb-item active">Ubah Data</li>
                    </ol>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('data-pns.update', $data_pns->id_pns) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor Kependudukan Indonesia (NIK)</label>
                                                <input type="number" name="nik" class="form-control"
                                                    placeholder="Nomor Kependudukan Indonesia (NIK)" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->nik)) }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor Identitas Pegawai Negeri Sipil (NIP)</label>
                                                <input type="number" name="nip" class="form-control"
                                                    placeholder="Nomor Identitas Pegawai Negeri Sipil (NIP)" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->nip)) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama_pns" class="form-control"
                                                    placeholder="Nama Lengkap" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->nama_pns)) }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    placeholder="Tempat Lahir" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->tempat_lahir)) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    @php
                                                        $tanggallahir = dekripsihillcipher(utf8_decode($data_pns->tanggal_lahir));
                                                    @endphp
                                                    <input type="text" name="tanggal_lahir"
                                                        class="form-control datetimepicker-input"
                                                        data-target="#reservationdate" placeholder="tahun/bulan/hari"
                                                        value="{{ date('Y-m-d', strtotime($tanggallahir)) }}">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" placeholder="Alamat" class="form-control" rows="3">{{ $data_pns->alamat != null ? dekripsihillcipher(utf8_decode($data_pns->alamat)) : '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <input type="text" name="jabatan" class="form-control"
                                                    placeholder="Jabatan" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->jabatan)) }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="email@mail.com" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->email)) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Bidang</label>
                                                <select name="id_bidang" id="id_bidang" class="form-control">
                                                    <option value="kosong">-- PILIH BIDANG --</option>
                                                    @foreach ($databidang as $key => $databidang)
                                                        <option value="{{ $databidang->id_bidang }}"
                                                            @if ($data_pns->id_bidang == $databidang->id_bidang) selected @endif>
                                                            {{ $databidang->nama_bidang }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Sub Bidang</label>
                                                <select name="id_sub_bidang" id="id_sub_bidang" class="form-control">
                                                    <option value="kosong">-- PILIH BIDANG DULU --</option>
                                                    @foreach ($id_sub_bidang as $key => $sub_bidang)
                                                        <option value="{{ $sub_bidang->id_sub_bidang }}"
                                                            @if ($data_pns->id_sub_bidang == $sub_bidang->id_sub_bidang) selected @endif>
                                                            {{ $sub_bidang->nama_sub_bidang }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor Handphone</label>
                                                <input type="number" name="nomor_hp" class="form-control"
                                                    placeholder="08xxx" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->nomor_hp)) }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pangkat/Golongan</label>
                                                <select name="pangkat_golongan" class="form-control" required>
                                                    <option value="-">-- PILIH PANGKAT GOLONGAN --</option>
                                                    <option value="Juru Muda (I/a)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Juru Muda (I/a)') selected @endif>Juru Muda
                                                        (I/a)</option>
                                                    <option value="Juru Muda Tingkat 1 (I/b)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Juru Muda Tingkat 1 (I/b)') selected @endif>Juru Muda Tingkat
                                                        1 (I/b)
                                                    </option>
                                                    <option value="Juru (I/c)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Juru (I/c)') selected @endif>Juru (I/c)
                                                    </option>
                                                    <option value="Juru Tingkat 1 (I/d)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Juru Tingkat 1 (I/d)') selected @endif>Juru Tingkat 1
                                                        (I/d)</option>
                                                    <option value="Pengatur Muda (II/a)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pengatur Muda (II/a)') selected @endif>Pengatur Muda
                                                        (II/a)</option>
                                                    <option value="Pengatur Muda Tingkat 1 (II/b)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pengatur Muda Tingkat 1 (II/b)') selected @endif>Pengatur Muda
                                                        Tingkat 1
                                                        (II/b)</option>
                                                    <option value="Pengatur (II/c)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pengatur (II/c)') selected @endif>Pengatur (II/c)
                                                    </option>
                                                    <option value="Pengatur Tingkat 1 (II/d)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pengatur Tingkat 1 (II/d)') selected @endif>Pengatur Tingkat 1
                                                        (II/d)
                                                    </option>
                                                    <option value="Penata Muda (III/a)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Penata Muda (III/a)') selected @endif>Penata Muda
                                                        (III/a)</option>
                                                    <option value="Penata Muda Tingkat 1 (III/b)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Penata Muda Tingkat 1 (III/b)') selected @endif>Penata Muda
                                                        Tingkat 1
                                                        (III/b)</option>
                                                    <option value="Penata (III/c)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Penata (III/c)') selected @endif>Penata (III/c)
                                                    </option>
                                                    <option value="Penata Tingkat 1 (III/d)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Penata Tingkat 1 (III/d)') selected @endif>Penata Tingkat 1
                                                        (III/d)
                                                    </option>
                                                    <option value="Pembina (IV/a)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pembina (IV/a)') selected @endif>Pembina (IV/a)
                                                    </option>
                                                    <option value="Pembina Tingkat 1 (IV/b)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pembina Tingkat 1 (IV/b)') selected @endif>Pembina Tingkat
                                                        1 (IV/b)
                                                    </option>
                                                    <option value="Pembina Utama Muda (IV/c)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pembina Utama Muda (IV/c)') selected @endif>Pembina Utama
                                                        Muda (IV/c)
                                                    </option>
                                                    <option value="Pembina Utama Madya (IV/d)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pembina Utama Madya (IV/d)') selected @endif>Pembina Utama
                                                        Madya (IV/d)
                                                    </option>
                                                    <option value="Pembina Utama (IV/e)"
                                                        @if (dekripsihillcipher(utf8_decode($data_pns->pangkat_golongan)) == 'Pembina Utama (IV/e)') selected @endif>Pembina Utama
                                                        (IV/e)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pendidikan Terakhir</label>
                                                <input type="text" name="pendidikan_terakhir" class="form-control"
                                                    placeholder="Pendidikan Terakhir" required
                                                    value="{{ dekripsihillcipher(utf8_decode($data_pns->pendidikan_terakhir)) }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Foto</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="foto_pns" class="custom-file-input"
                                                        id="customFile">
                                                    <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('jsfile')
    <!-- InputMask -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'YYYY/MM/DD'
            });
        })
        $('#id_bidang').on('change', function() {
            let bidang = $('select[name="id_bidang"]').val()
            $.ajax({
                    url: "{{ url('/ajaxoptionsubbidang') }}/" + bidang,
                    method: "GET",
                })
                .done(function(result) {
                    console.log(result);
                    $('select[name="id_sub_bidang"]').html(result)
                });
        });
    </script>
@endsection
