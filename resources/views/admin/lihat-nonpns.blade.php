@extends('admin/templatedashboard')
@section('cssfile')
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/ekko-lightbox/ekko-lightbox.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lihat Data Non PNS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Lihat Data Non PNS</li>
                    </ol>
                </div>
                <div class="col-sm-12 mt-3">
                    <div class="float-left">
                        <a class="btn btn-success" href="{{ route('data-nonpns.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Data Non PNS
                                <b>{{ dekripsihillcipher(utf8_decode($datanya->nama_non_pns)) }}</b>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="{{ url('datafoto_nonpns/' . $datanya->foto_non_pns) }}" data-toggle="lightbox"
                                        data-title="Foto {{ dekripsihillcipher(utf8_decode($datanya->nama_non_pns)) }}"
                                        data-gallery="gallery">
                                        <img src="{{ url('datafoto_nonpns/' . $datanya->foto_non_pns) }}"
                                            class="img-fluid mb-2"
                                            alt="Foto {{ dekripsihillcipher(utf8_decode($datanya->nama_non_pns)) }}">
                                    </a>
                                </div>
                                <div class="col-sm-8">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="25%">Nomor Induk Kependudukan (NIK)</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->nik)) }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Nama Lengkap</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->nama_non_pns)) }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                @php
                                                    $tanggallahir = dekripsihillcipher(utf8_decode($datanya->tanggal_lahir));
                                                @endphp
                                                <td width="25%">Tempat, Tanggal Lahir</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->tempat_lahir)) }},
                                                        {{ date('d-M-Y', strtotime($tanggallahir)) }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Alamat</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ $datanya->alamat != null ? dekripsihillcipher(utf8_decode($datanya->alamat)) : '' }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Jabatan</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->jabatan)) }}</b></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Bidang</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ $datanya->bidang->nama_bidang }}</b></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Sub Bidang</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ $datanya->subbidang->nama_sub_bidang }}</b></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Nomor Handphone (HP)</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->nomor_hp)) }}</b></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Nomor Pokok Wajib Pajak (NPWP)</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->nomor_npwp)) }}</b></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Nomor BPJS Ketenagakerjaan</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->nomor_bpjs_ketenagakerjaan)) }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Email</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->email)) }}</b></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Pendidikan Terakhir</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->pendidikan_terakhir)) }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Tahun Mulai/Awal Bekerja (Di Bappeda Prov. Kaltim)</td>
                                                <td width="1%" align="center">:</td>
                                                <td><b>{{ dekripsihillcipher(utf8_decode($datanya->tahun_masuk)) }}</b>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('jsfile')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Ekko Lightbox -->
    <script src="{{ asset('admin/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        });
    </script>
@endsection
