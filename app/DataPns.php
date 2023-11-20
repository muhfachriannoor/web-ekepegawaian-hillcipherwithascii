<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPns extends Model
{
    protected $table = 'data_pns';
    protected $primaryKey = 'id_pns';
    protected $fillable = [
        'nik', 'nip', 'nama_pns', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'id_bidang', 'id_sub_bidang', 'nomor_hp', 'email', 'pangkat_golongan', 'jabatan', 'pendidikan_terakhir', 'foto_pns'
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
