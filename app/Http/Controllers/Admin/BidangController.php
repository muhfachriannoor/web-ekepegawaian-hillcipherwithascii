<?php

namespace App\Http\Controllers\Admin;

use App\Bidang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BidangController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $showdata = Bidang::all();
        $title = 'Data Bidang';
        return view('admin/data-bidang', compact('showdata', 'title'));
    }

    public function create()
    {
        $title = 'Data Bidang';
        return view('admin/tambah-bidang', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bidang'   => 'required',
            'singkatan'     => 'required',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nama_bidang = $request->input('nama_bidang');
        $singkatan   = $request->input('singkatan');

        $insert = Bidang::create([
            'nama_bidang'  => $nama_bidang,
            'singkatan'    => $singkatan,
        ]);
        if ($insert == TRUE) {
            toastr()->success('Berhasil menambahkan data');
            return redirect()->route('data-bidang.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()->route('data-bidang.index');
        }
    }

    public function edit($id_bidang)
    {
        $datanya = Bidang::find($id_bidang);
        $title = 'Data Bidang';
        return view('admin.ubah-bidang', compact('datanya', 'title'));
    }

    public function update(Request $request, $id_bidang)
    {
        $request->validate([
            'nama_bidang'   => 'required',
            'singkatan'     => 'required',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nama_bidang = $request->input('nama_bidang');
        $singkatan   = $request->input('singkatan');

        $update = Bidang::where('id_bidang', $id_bidang)->update([
            'nama_bidang'  => $nama_bidang,
            'singkatan'    => $singkatan,
        ]);

        if ($update == TRUE) {
            toastr()->success('Berhasil mengubah data');
            return redirect()->route('data-bidang.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()->route('data-bidang.index');
        }
    }

    public function destroy($id_bidang)
    {
        $data_bidang = Bidang::find($id_bidang);
        $delete = $data_bidang->delete();
        if ($delete == TRUE) {
            toastr()->success('Berhasil menghapus data');
            return redirect()->route('data-bidang.index');
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->route('data-bidang.index');
        }
    }
}
