<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ["kategori_buku"];
   
    protected $primaryKey = "id";   

    public function buku(): HasMany
    {
        return $this->hasMany('App\buku');
    }
}
