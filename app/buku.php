<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = "buku";
    protected $fillable = ["cover", "isbn_issn", "judul_buku", "tahun_terbit", "tempat_terbit", "stok_buku", "deskripsi","kategori_id","rak_id","penulis_id","penerbit_id"];
   
    protected $primaryKey = "id";   

    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }

    public function penulis()
    {
        return $this->belongsTo('App\penulis');
    }

    public function penerbit()
    {
        return $this->belongsTo('App\penerbit');
    }

    public function rak()
    {
        return $this->belongsTo('App\rak');
    }
    
    public function peminjaman()
    {
        return $this->belongsTo('App\peminjaman');
    }

}
