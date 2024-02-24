<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rak extends Model
{
    protected $table = "rak";
    protected $fillable = ["lokasi_rak"];
   
    protected $primaryKey = "id";

    public function buku(): HasMany
    {
        return $this->hasMany('App\buku');
    }

}
