<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primarKey = 'id';
    protected $fillable = ['tgl_pengaduan', 'id_masyarakat', 'nik', 'isi_laporan', 'foto', 'status'];

    public function masyarakat()
    {
        return $this->belongsTo('App\Masyarakat', 'id_masyarakat', 'id');
    }
}
