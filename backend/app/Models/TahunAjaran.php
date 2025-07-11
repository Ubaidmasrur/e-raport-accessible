<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $fillable = [
        'tahun', 'semester', 'aktif'
    ];

    public function nilai() {
        return $this->hasMany(Nilai::class);
    }
}
