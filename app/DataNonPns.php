<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNonPns extends Model
{
    protected $table = 'data_non_pns';
    protected $primaryKey = 'id_non_pns';
    protected $fillable = [
        'nik', 'nama_non_pns', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'id_bidang', 'id_sub_bidang', 'nomor_hp', 'email', 'nomor_npwp', 'tahun_masuk', 'jabatan', 'nomor_bpjs_ketenagakerjaan', 'pendidikan_terakhir', 'foto_non_pns'
    ];

    public function bidang()
    {
        return $this->belongsTo('App\Bidang', 'id_bidang', 'id_bidang');
    }

    public function subbidang()
    {
        return $this->belongsTo('App\Subbidang', 'id_sub_bidang', 'id_sub_bidang');
    }
}
