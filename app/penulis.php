<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    protected $table = "penulis";
    protected $fillable = ["nama_penulis"];
   
    protected $primaryKey = "id";   

    public function buku(): HasMany
    {
        return $this->hasMany('App\buku');
    }
}
