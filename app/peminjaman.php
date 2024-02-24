<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = "peminjaman";
    protected $fillable = ["tanggal_pinjam", "tanggal_kembali", "batas_pengembalian", "jumlah_buku_dipinjam", "anggota_id", "buku_id"];
   
    protected $primaryKey = "id";   

    public function anggota()
    {
        return $this->belongsTo('App\anggota');
    }

    public function buku()
    {
        return $this->belongsTo('App\buku');
    }

    public function pengembalian()
    {
        return $this->belongsTo('App\pengembalian');
    }

}
