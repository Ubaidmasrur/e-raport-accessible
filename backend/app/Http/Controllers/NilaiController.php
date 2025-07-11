<?php
namespace App\Http\Controllers;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return response()->json(Nilai::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'siswa_id' => 'required',
            'indikator_id' => 'required',
            'nilai' => 'required|numeric',
            'semester' => 'required',
            'tahun_ajaran_id' => 'required',
        ]);
        $nilai = Nilai::create($data);
        return response()->json($nilai);
    }
}
