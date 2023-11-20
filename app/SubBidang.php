<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubBidang extends Model
{
    protected $table = 'sub_bidang';
    protected $primaryKey = 'id_sub_bidang';
    protected $fillable = [
        'id_sub_bidang', 'nama_sub_bidang', 'singkatan', 'id_bidang'
    ];

    public function bidang()
    {
        return $this->belongsTo('App\Bidang', 'id_bidang', 'id_bidang');
    }
}
