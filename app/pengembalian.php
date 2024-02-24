<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    protected $table = "pengembalian";
    protected $fillable = ['jumlah_buku_dikembalikan', 'peminjaman_id'];
   
    protected $primaryKey = "id";

    public function peminjaman(): HasMany
    {
        return $this->hasMany('App\peminjaman');
    }
}
