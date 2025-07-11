<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    protected $fillable = [
        'nama', 'kategori'
    ];

    public function nilai() {
        return $this->hasMany(Nilai::class);
    }
}
