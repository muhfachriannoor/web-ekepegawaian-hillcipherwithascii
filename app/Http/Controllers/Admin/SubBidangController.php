<?php

namespace App\Http\Controllers\Admin;

use App\Bidang;
use App\SubBidang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubBidangController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $showdata = SubBidang::all();
        $title = 'Data Sub Bidang';
        return view('admin/data-subbidang', compact('showdata', 'title'));
    }

    public function create()
    {
        $databidang = Bidang::all();
        $title = 'Data Sub Bidang';
        return view('admin/tambah-subbidang', compact('databidang', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_bidang'   => 'required',
            'nama_sub_bidang'   => 'required',
            'singkatan'     => 'required',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $id_bidang          = $request->input('id_bidang');
        $nama_sub_bidang    = $request->input('nama_sub_bidang');
        $singkatan          = $request->input('singkatan');

        $insert = SubBidang::create([
            'id_bidang'  => $id_bidang,
            'nama_sub_bidang'  => $nama_sub_bidang,
            'singkatan'    => $singkatan,
        ]);
        if ($insert == TRUE) {
            toastr()->success('Berhasil menambahkan data');
            return redirect()->route('data-subbidang.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()->route('data-subbidang.index');
        }
    }

    public function edit($id_bidang)
    {
        $databidang = Bidang::all();
        $datanya = SubBidang::find($id_bidang);
        $title = 'Data Sub Bidang';
        return view('admin.ubah-subbidang', compact('databidang', 'datanya', 'title'));
    }

    public function update(Request $request, $id_sub_bidang)
    {
        $request->validate([
            'id_bidang'   => 'required',
            'nama_sub_bidang'   => 'required',
            'singkatan'     => 'required',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $id_bidang          = $request->input('id_bidang');
        $nama_sub_bidang    = $request->input('nama_sub_bidang');
        $singkatan          = $request->input('singkatan');

        $update = SubBidang::where('id_sub_bidang', $id_sub_bidang)->update([
            'id_bidang'  => $id_bidang,
            'nama_sub_bidang'  => $nama_sub_bidang,
            'singkatan'    => $singkatan,
        ]);

        if ($update == TRUE) {
            toastr()->success('Berhasil mengubah data');
            return redirect()->route('data-subbidang.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()->route('data-subbidang.index');
        }
    }

    public function destroy($id_sub_bidang)
    {
        $data_subbidang = SubBidang::find($id_sub_bidang);
        $delete = $data_subbidang->delete();
        if ($delete == TRUE) {
            toastr()->success('Berhasil menghapus data');
            return redirect()->route('data-subbidang.index');
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->route('data-subbidang.index');
        }
    }
}
