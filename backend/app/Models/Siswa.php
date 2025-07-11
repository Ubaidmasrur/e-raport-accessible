<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama', 'nis', 'kelas', 'wali_email'
    ];

    public function nilai() {
        return $this->hasMany(Nilai::class);
    }
}
