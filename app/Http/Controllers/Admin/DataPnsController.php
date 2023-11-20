<?php

namespace App\Http\Controllers\Admin;

use App\DataPns;
use App\Bidang;
use App\SubBidang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use File;

class DataPnsController extends Controller
{
    public function index()
    {
        $showdata = DataPns::all();
        $title = 'Data PNS';
        return view('admin/data-pns', compact('showdata', 'title'));
    }

    public function ExportExcel($datanya)
    {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '4000M');
        try {
            $spreadSheet = new Spreadsheet();
            $spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
            $styleTable = ['borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]]];
            $spreadSheet->getActiveSheet()->getStyle('A1:L16')->applyFromArray($styleTable);
            $spreadSheet->getActiveSheet()->fromArray($datanya);
            $Excel_writer = new Xls($spreadSheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Data PNS.xls"');
            header('Cache-Control: max-age=0');
            ob_end_clean();
            $Excel_writer->save('php://output');
            exit();
        } catch (Exception $e) {
            return;
        }
    }

    function exportexcel_pns()
    {
        $datanya = DataPns::all();
        $data_array[] = array("NIK", "NIP", "Nama Lengkap", "Tempat Lahir", "Tanggal Lahir", "Alamat", "Bidang", "Sub Bidang", "Nomor HP", "Email", "Jabatan", "Pendidikan Terakhir");
        foreach ($datanya as $data_item) {
            $tanggallahir = dekripsihillcipher(utf8_decode($data_item->tanggal_lahir));
            $data_array[] = array(
                'NIK' => dekripsihillcipher(utf8_decode($data_item->nik)),
                'NIP' => dekripsihillcipher(utf8_decode($data_item->nip)),
                'Nama Lengkap' => dekripsihillcipher(utf8_decode($data_item->nama_pns)),
                'Tempat Lahir' => dekripsihillcipher(utf8_decode($data_item->tempat_lahir)),
                'Tanggal Lahir' => date('d-M-Y', strtotime($tanggallahir)),
                'Alamat' => $data_item->alamat != null ? dekripsihillcipher(utf8_decode($data_item->alamat)) : '',
                'Bidang' => $data_item->bidang->nama_bidang,
                'Sub Bidang' => $data_item->subbidang->nama_sub_bidang != null ? $data_item->subbidang->nama_sub_bidang : '',
                'Nomor HP' => dekripsihillcipher(utf8_decode($data_item->nomor_hp)),
                'Email' => dekripsihillcipher(utf8_decode($data_item->email)),
                'Jabatan' => dekripsihillcipher(utf8_decode($data_item->jabatan)),
                'Pendidikan Terakhir' => dekripsihillcipher(utf8_decode($data_item->pendidikan_terakhir)),
            );
        }
        $this->ExportExcel($data_array);
    }

    public function create()
    {
        $databidang = Bidang::all();
        $title = 'Data PNS';
        return view('admin/tambah-pns', compact('databidang', 'title'));
    }

    public function ajaxoptionsubbidang($id_bidang)
    {
        $id_subbidang = SubBidang::where('id_bidang', $id_bidang)->get();
        foreach ($id_subbidang as $key => $value) {
            $html[] = '<option value="' . $value->id_sub_bidang . '">' . $value->nama_sub_bidang . '</option>';
        }
        return $html;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik'                 => 'required',
            'nip'                 => 'required',
            'nama_pns'            => 'required',
            'tempat_lahir'        => 'required',
            'tanggal_lahir'       => 'required',
            'id_bidang'           => 'required',
            'id_sub_bidang'       => 'required',
            'nomor_hp'            => 'required',
            'email'               => 'required',
            'pangkat_golongan'    => 'required',
            'jabatan'             => 'required',
            'pendidikan_terakhir' => 'required',
            'foto_pns'            => 'required|file|image|mimes:jpeg,png,jpg',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nik                 = utf8_encode(enkripsihillcipher($request->input('nik')));
        $nip                 = utf8_encode(enkripsihillcipher($request->input('nip')));
        $nama_pns            = utf8_encode(enkripsihillcipher($request->input('nama_pns')));
        $tempat_lahir        = utf8_encode(enkripsihillcipher($request->input('tempat_lahir')));
        $tanggal_lahir       = utf8_encode(enkripsihillcipher(date('Y-m-d', strtotime($request->input('tanggal_lahir')))));
        $alamat              = ($request->input('alamat') == NULL) ? NULL : utf8_encode(enkripsihillcipher($request->input('alamat')));
        $id_bidang           = $request->input('id_bidang');
        $id_sub_bidang       = $request->input('id_sub_bidang');
        $nomor_hp            = utf8_encode(enkripsihillcipher($request->input('nomor_hp')));
        $email               = utf8_encode(enkripsihillcipher($request->input('email')));
        $pangkat_golongan    = utf8_encode(enkripsihillcipher($request->input('pangkat_golongan')));
        $jabatan             = utf8_encode(enkripsihillcipher($request->input('jabatan')));
        $pendidikan_terakhir = utf8_encode(enkripsihillcipher($request->input('pendidikan_terakhir')));
        $file                = $request->file('foto_pns');

        $nama_file = $file->getClientOriginalName();
        $simpanfolder = 'datafoto_pns';
        $file->move($simpanfolder, $nama_file);

        $insert = DataPns::create([
            'nik'                 => $nik,
            'nip'                 => $nip,
            'nama_pns'            => $nama_pns,
            'tempat_lahir'        => $tempat_lahir,
            'tanggal_lahir'       => $tanggal_lahir,
            'alamat'              => $alamat,
            'id_bidang'           => $id_bidang,
            'id_sub_bidang'       => $id_sub_bidang,
            'nomor_hp'            => $nomor_hp,
            'email'               => $email,
            'pangkat_golongan'    => $pangkat_golongan,
            'jabatan'             => $jabatan,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'foto_pns'            => $nama_file
        ]);

        if ($insert == TRUE) {
            toastr()->success('Berhasil menambahkan data');
            return redirect()->route('data-pns.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()->route('data-pns.index');
        }
    }

    public function show($id_pns)
    {
        $datanya = DataPns::findOrFail($id_pns);
        $title = 'Data PNS';
        return view('admin.lihat-pns', compact('datanya', 'title'));
    }

    public function edit($id_pns)
    {
        $data_pns = DataPns::find($id_pns);
        $databidang = Bidang::all();
        $id_sub_bidang = SubBidang::where('id_bidang', $data_pns->id_bidang)->get();
        $title = 'Data PNS';
        return view('admin.ubah-pns', compact('data_pns', 'title', 'databidang', 'id_sub_bidang'));
    }

    public function update(Request $request, $id_pns)
    {
        $request->validate([
            'nik'                 => 'required',
            'nip'                 => 'required',
            'nama_pns'            => 'required',
            'tempat_lahir'        => 'required',
            'tanggal_lahir'       => 'required',
            'id_bidang'           => 'required',
            'id_sub_bidang'       => 'required',
            'nomor_hp'            => 'required',
            'email'               => 'required',
            'pangkat_golongan'    => 'required',
            'jabatan'             => 'required',
            'pendidikan_terakhir' => 'required',
            'foto_pns'            => 'file|image|mimes:jpeg,png,jpg',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nik                 = utf8_encode(enkripsihillcipher($request->input('nik')));
        $nip                 = utf8_encode(enkripsihillcipher($request->input('nip')));
        $nama_pns            = utf8_encode(enkripsihillcipher($request->input('nama_pns')));
        $tempat_lahir        = utf8_encode(enkripsihillcipher($request->input('tempat_lahir')));
        $tanggal_lahir       = utf8_encode(enkripsihillcipher(date('Y-m-d', strtotime($request->input('tanggal_lahir')))));
        $alamat              = ($request->input('alamat') == NULL) ? NULL : utf8_encode(enkripsihillcipher($request->input('alamat')));
        $id_bidang           = $request->input('id_bidang');
        $id_sub_bidang       = $request->input('id_sub_bidang');
        $nomor_hp            = utf8_encode(enkripsihillcipher($request->input('nomor_hp')));
        $email               = utf8_encode(enkripsihillcipher($request->input('email')));
        $pangkat_golongan    = utf8_encode(enkripsihillcipher($request->input('pangkat_golongan')));
        $jabatan             = utf8_encode(enkripsihillcipher($request->input('jabatan')));
        $pendidikan_terakhir = utf8_encode(enkripsihillcipher($request->input('pendidikan_terakhir')));
        $file                = $request->file('foto_pns');

        $data_pns = DataPns::find($id_pns);
        if ($file != "") {
            $hapus = File::delete(public_path('datafoto_pns/' . $data_pns->foto_pns));
            $nama_file = $file->getClientOriginalName();
            $simpanfolder = 'datafoto_pns';
            $file->move($simpanfolder, $nama_file);
        } else {
            $nama_file = $data_pns->foto_pns;
        }

        $update = DataPns::where('id_pns', $data_pns->id_pns)->update([
            'nik'                 => $nik,
            'nip'                 => $nip,
            'nama_pns'            => $nama_pns,
            'tempat_lahir'        => $tempat_lahir,
            'tanggal_lahir'       => $tanggal_lahir,
            'alamat'              => $alamat,
            'id_bidang'           => $id_bidang,
            'id_sub_bidang'       => $id_sub_bidang,
            'nomor_hp'            => $nomor_hp,
            'email'               => $email,
            'pangkat_golongan'    => $pangkat_golongan,
            'jabatan'             => $jabatan,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'foto_pns'            => $nama_file
        ]);
        if ($update == TRUE) {
            toastr()->success('Berhasil mengubah data');
            return redirect()->route('data-pns.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()->route('data-pns.index');
        }
    }

    public function destroy($id_pns)
    {
        $data_pns = DataPns::find($id_pns);
        $hapus = File::delete(public_path('datafoto_pns/' . $data_pns->foto_pns));
        $delete = $data_pns->delete();
        if ($delete == TRUE) {
            toastr()->success('Berhasil menghapus data');
            return redirect()->route('data-pns.index');
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->route('data-pns.index');
        }
    }
}
