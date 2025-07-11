<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['siswa_id','indikator_id','nilai','semester','tahun_ajaran_id'];
}
