<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    protected $table = "penerbit";
    protected $fillable = ["nama_penerbit"];
   
    protected $primaryKey = "id";   

    public function buku(): HasMany
    {
        return $this->hasMany('App\buku');
    }
}
