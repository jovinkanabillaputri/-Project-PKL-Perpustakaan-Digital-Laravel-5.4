<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table = "anggota";
    protected $fillable = ["nama", "jenis_kelamin", "no_hp", "alamat", "email", "tanggal_daftar", "status"]; 

    protected $primaryKey = "id"; 
    
    public function peminjaman(): HasMany
    {
        return $this->hasMany('App\peminjaman');
    }
}
