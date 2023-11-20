<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use File;

class DataAkunController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $showdata = User::all();
        $title = 'Data Akun';
        return view('admin/data-akun', compact('showdata', 'title'));
    }

    public function create()
    {
        $title = 'Data Akun';
        return view('admin/tambah-akun', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required|min:4',
            'email'             => 'required|unique:users|min:4',
            'username'          => 'required|unique:users|min:4',
            'password'          => 'required|same:konfirm_password|min:4',
            'konfirm_password'  => 'required|min:4',
            'level'             => 'required',
            'foto_user'         => 'required'
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nama       = $request->input('nama');
        $email      = $request->input('email');
        $username   = $request->input('username');
        $password   = $request->input('password');
        $level      = $request->input('level');
        $file       = $request->file('foto_user');

        $nama_file = $file->getClientOriginalName();
        $simpanfolder = 'datafoto_user';
        $file->move($simpanfolder, $nama_file);

        $insert = User::create([
            'nama'  => $nama,
            'email'  => $email,
            'username'  => $username,
            'password'  => Hash::make($password),
            'level'  => $level,
            'foto_user'  => $nama_file
        ]);

        if ($insert == TRUE) {
            toastr()->success('Berhasil menambahkan data');
            return redirect()->route('data-akun.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()->route('data-akun.index');
        }
    }

    public function show($id)
    {
        $datanya = User::findOrFail($id);
        $title = 'Data Akun';
        return view('admin.lihat-akun', compact('datanya', 'title'));
    }

    public function edit($id)
    {
        $datanya = User::find($id);
        $title = 'Data Akun';
        return view('admin.ubah-akun', compact('datanya', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'              => 'required|min:4',
            'email'             => 'required|min:4', Rule::unique('users')->ignore($id),
            'username'          => 'required|min:4', Rule::unique('users')->ignore($id),
            'level'             => 'required',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nama       = $request->input('nama');
        $email      = $request->input('email');
        $username   = $request->input('username');
        $password   = $request->input('password');
        $level      = $request->input('level');
        $file       = $request->file('foto_user');

        $datanya = User::find($id);
        if ($password != "") {
            $request->validate([
                'password'          => 'same:konfirm_password|min:4',
                'konfirm_password'  => 'min:4',
            ]);
            $passwordnya = Hash::make($password);
        } else {
            $passwordnya = $datanya->password;
        }

        if ($file != "") {
            $hapus = File::delete(public_path('datafoto_user/' . $datanya->foto_user));
            $nama_file = $file->getClientOriginalName();
            $simpanfolder = 'datafoto_user';
            $file->move($simpanfolder, $nama_file);
        } else {
            $nama_file = $datanya->foto_user;
        }

        $update = User::where('id', $datanya->id)->update([
            'nama'  => $nama,
            'email'  => $email,
            'username'  => $username,
            'password'  => $passwordnya,
            'level'  => $level,
            'foto_user'  => $nama_file
        ]);
        if ($update == TRUE) {
            toastr()->success('Berhasil mengubah data');
            return redirect()->route('data-akun.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()->route('data-akun.index');
        }
    }

    public function destroy($id)
    {
        $datanya = User::find($id);
        $hapus = File::delete(public_path('datafoto_user/' . $datanya->foto_user));
        $delete = $datanya->delete();
        if ($delete == TRUE) {
            toastr()->success('Berhasil menghapus data');
            return redirect()->route('data-akun.index');
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->route('data-akun.index');
        }
    }
}
