<?php

namespace App\Http\Controllers\Admin;

use App\DataNonPns;
use App\Bidang;
use App\SubBidang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use File;

class DataNonPnsController extends Controller
{
    public function index()
    {
        $showdata = DataNonPns::all();
        $title = 'Data Non PNS';
        return view('admin/data-nonpns', compact('showdata', 'title'));
    }

    public function ExportExcel($datanya)
    {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '4000M');
        try {
            $spreadSheet = new Spreadsheet();
            $spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
            $styleTable = ['borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]]];
            $spreadSheet->getActiveSheet()->getStyle('A1:N16')->applyFromArray($styleTable);
            $spreadSheet->getActiveSheet()->fromArray($datanya);
            $Excel_writer = new Xls($spreadSheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Data Non PNS.xls"');
            header('Cache-Control: max-age=0');
            ob_end_clean();
            $Excel_writer->save('php://output');
            exit();
        } catch (Exception $e) {
            return;
        }
    }

    function exportexcel_nonpns()
    {
        $datanya = DataNonPns::all();
        $data_array[] = array("NIK", "Nama Lengkap", "Tempat Lahir", "Tanggal Lahir", "Alamat", "Jabatan", "Bidang", "Sub Bidang", "Nomor HP", "Nomor NPWP", "Nomor BPJS Ketenagakerjaan", "Email", "Pendidikan Terakhir", "Tahun Masuk");
        foreach ($datanya as $data_item) {
            $tanggallahir = dekripsihillcipher(utf8_decode($data_item->tanggal_lahir));
            $data_array[] = array(
                'NIK' => dekripsihillcipher(utf8_decode($data_item->nik)),
                'Nama Lengkap' => dekripsihillcipher(utf8_decode($data_item->nama_non_pns)),
                'Tempat Lahir' => dekripsihillcipher(utf8_decode($data_item->tempat_lahir)),
                'Tanggal Lahir' => date('d-M-Y', strtotime($tanggallahir)),
                'Alamat' => $data_item->alamat != null ? dekripsihillcipher(utf8_decode($data_item->alamat)) : '',
                'Jabatan' => dekripsihillcipher(utf8_decode($data_item->jabatan)),
                'Bidang' => $data_item->bidang->nama_bidang,
                'Sub Bidang' => $data_item->subbidang->nama_sub_bidang != null ? $data_item->subbidang->nama_sub_bidang : '',
                'Nomor HP' => dekripsihillcipher(utf8_decode($data_item->nomor_hp)),
                'Nomor NPWP' => dekripsihillcipher(utf8_decode($data_item->nomor_npwp)),
                'Nomor BPJS Ketenagakerjaan' => dekripsihillcipher(utf8_decode($data_item->nomor_bpjs_ketenagakerjaan)),
                'Email' => dekripsihillcipher(utf8_decode($data_item->email)),
                'Pendidikan Terakhir' => dekripsihillcipher(utf8_decode($data_item->pendidikan_terakhir)),
                'Tahun Masuk' => dekripsihillcipher(utf8_decode($data_item->tahun_masuk)),
            );
        }
        $this->ExportExcel($data_array);
    }

    public function create()
    {
        $databidang = Bidang::all();
        $title = 'Data Non PNS';
        return view('admin/tambah-nonpns', compact('databidang', 'title'));
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
            'nik'                           => 'required',
            'nama_non_pns'                  => 'required',
            'tempat_lahir'                  => 'required',
            'tanggal_lahir'                 => 'required',
            'id_bidang'                     => 'required',
            'id_sub_bidang'                 => 'required',
            'nomor_hp'                      => 'required',
            'email'                         => 'required',
            'nomor_npwp'                    => 'required',
            'tahun_masuk'                   => 'required',
            'jabatan'                       => 'required',
            'nomor_bpjs_ketenagakerjaan'    => 'required',
            'pendidikan_terakhir'           => 'required',
            'foto_non_pns'                  => 'required|file|image|mimes:jpeg,png,jpg',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nik                            = utf8_encode(enkripsihillcipher($request->input('nik')));
        $nama_non_pns                   = utf8_encode(enkripsihillcipher($request->input('nama_non_pns')));
        $tempat_lahir                   = utf8_encode(enkripsihillcipher($request->input('tempat_lahir')));
        $tanggal_lahir                  = utf8_encode(enkripsihillcipher(date('Y-m-d', strtotime($request->input('tanggal_lahir')))));
        $alamat                         = ($request->input('alamat') == NULL) ? NULL : utf8_encode(enkripsihillcipher($request->input('alamat')));
        $id_bidang                      = $request->input('id_bidang');
        $id_sub_bidang                  = $request->input('id_sub_bidang');
        $nomor_hp                       = utf8_encode(enkripsihillcipher($request->input('nomor_hp')));
        $email                          = utf8_encode(enkripsihillcipher($request->input('email')));
        $nomor_npwp                     = utf8_encode(enkripsihillcipher($request->input('nomor_npwp')));
        $tahun_masuk                    = utf8_encode(enkripsihillcipher($request->input('tahun_masuk')));
        $jabatan                        = utf8_encode(enkripsihillcipher($request->input('jabatan')));
        $nomor_bpjs_ketenagakerjaan     = utf8_encode(enkripsihillcipher($request->input('nomor_bpjs_ketenagakerjaan')));
        $pendidikan_terakhir            = utf8_encode(enkripsihillcipher($request->input('pendidikan_terakhir')));
        $file                           = $request->file('foto_non_pns');

        $nama_file = $file->getClientOriginalName();
        $simpanfolder = 'datafoto_nonpns';
        $file->move($simpanfolder, $nama_file);

        $insert = DataNonPns::create([
            'nik'                           => $nik,
            'nama_non_pns'                  => $nama_non_pns,
            'tempat_lahir'                  => $tempat_lahir,
            'tanggal_lahir'                 => $tanggal_lahir,
            'alamat'                        => $alamat,
            'id_bidang'                     => $id_bidang,
            'id_sub_bidang'                 => $id_sub_bidang,
            'nomor_hp'                      => $nomor_hp,
            'email'                         => $email,
            'nomor_npwp'                    => $nomor_npwp,
            'tahun_masuk'                   => $tahun_masuk,
            'jabatan'                       => $jabatan,
            'nomor_bpjs_ketenagakerjaan'    => $nomor_bpjs_ketenagakerjaan,
            'pendidikan_terakhir'           => $pendidikan_terakhir,
            'foto_non_pns'                  => $nama_file
        ]);
        if ($insert == TRUE) {
            toastr()->success('Berhasil menambahkan data');
            return redirect()->route('data-nonpns.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()->route('data-nonpns.index');
        }
    }

    public function show($id_non_pns)
    {
        $datanya = DataNonPns::findOrFail($id_non_pns);
        $title = 'Data Non PNS';
        return view('admin.lihat-nonpns', compact('datanya', 'title'));
    }

    public function edit($id_non_pns)
    {
        $datanya = DataNonPns::find($id_non_pns);
        $databidang = Bidang::all();
        $id_sub_bidang = SubBidang::where('id_bidang', $datanya->id_bidang)->get();
        $title = 'Data Non PNS';
        return view('admin.ubah-nonpns', compact('datanya', 'title', 'databidang', 'id_sub_bidang'));
    }

    public function update(Request $request, $id_non_pns)
    {
        $request->validate([
            'nik'                           => 'required',
            'nama_non_pns'                  => 'required',
            'tempat_lahir'                  => 'required',
            'tanggal_lahir'                 => 'required',
            'id_bidang'                     => 'required',
            'id_sub_bidang'                 => 'required',
            'nomor_hp'                      => 'required',
            'email'                         => 'required',
            'nomor_npwp'                    => 'required',
            'tahun_masuk'                   => 'required',
            'jabatan'                       => 'required',
            'nomor_bpjs_ketenagakerjaan'    => 'required',
            'pendidikan_terakhir'           => 'required',
            'foto_non_pns'                  => 'file|image|mimes:jpeg,png,jpg',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $nik                        = utf8_encode(enkripsihillcipher($request->input('nik')));
        $nama_non_pns               = utf8_encode(enkripsihillcipher($request->input('nama_non_pns')));
        $tempat_lahir               = utf8_encode(enkripsihillcipher($request->input('tempat_lahir')));
        $tanggal_lahir              = utf8_encode(enkripsihillcipher(date('Y-m-d', strtotime($request->input('tanggal_lahir')))));
        $alamat                     = ($request->input('alamat') == NULL) ? NULL : utf8_encode(enkripsihillcipher($request->input('alamat')));
        $id_bidang                  = $request->input('id_bidang');
        $id_sub_bidang              = $request->input('id_sub_bidang');
        $nomor_hp                   = utf8_encode(enkripsihillcipher($request->input('nomor_hp')));
        $email                      = utf8_encode(enkripsihillcipher($request->input('email')));
        $nomor_npwp                 = utf8_encode(enkripsihillcipher($request->input('nomor_npwp')));
        $tahun_masuk                = utf8_encode(enkripsihillcipher($request->input('tahun_masuk')));
        $jabatan                    = utf8_encode(enkripsihillcipher($request->input('jabatan')));
        $nomor_bpjs_ketenagakerjaan = utf8_encode(enkripsihillcipher($request->input('nomor_bpjs_ketenagakerjaan')));
        $pendidikan_terakhir        = utf8_encode(enkripsihillcipher($request->input('pendidikan_terakhir')));
        $file                       = $request->file('foto_non_pns');

        $datanya = DataNonPns::find($id_non_pns);
        if ($file != "") {
            $hapus = File::delete(public_path('datafoto_nonpns/' . $datanya->foto_non_pns));
            $nama_file = $file->getClientOriginalName();
            $simpanfolder = 'datafoto_nonpns';
            $file->move($simpanfolder, $nama_file);
        } else {
            $nama_file = $datanya->foto_non_pns;
        }

        $update = DataNonPns::where('id_non_pns', $datanya->id_non_pns)->update([
            'nik'                           => $nik,
            'nama_non_pns'                  => $nama_non_pns,
            'tempat_lahir'                  => $tempat_lahir,
            'tanggal_lahir'                 => $tanggal_lahir,
            'alamat'                        => $alamat,
            'id_bidang'                     => $id_bidang,
            'id_sub_bidang'                 => $id_sub_bidang,
            'nomor_hp'                      => $nomor_hp,
            'email'                         => $email,
            'nomor_npwp'                    => $nomor_npwp,
            'tahun_masuk'                   => $tahun_masuk,
            'jabatan'                       => $jabatan,
            'nomor_bpjs_ketenagakerjaan'    => $nomor_bpjs_ketenagakerjaan,
            'pendidikan_terakhir'           => $pendidikan_terakhir,
            'foto_non_pns'                  => $nama_file
        ]);
        if ($update == TRUE) {
            toastr()->success('Berhasil mengubah data');
            return redirect()->route('data-nonpns.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()->route('data-nonpns.index');
        }
    }

    public function destroy($id_non_pns)
    {
        $datanya = DataNonPns::find($id_non_pns);
        $hapus = File::delete(public_path('datafoto_nonpns/' . $datanya->foto_non_pns));
        $delete = $datanya->delete();
        if ($delete == TRUE) {
            toastr()->success('Berhasil menghapus data');
            return redirect()->route('data-nonpns.index');
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->route('data-nonpns.index');
        }
    }
}
