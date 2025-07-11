<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index() {
        return Nilai::with(['siswa', 'indikator'])->get();
    }

    public function store(Request $request) {
        return Nilai::create($request->all());
    }

    public function update(Request $request, $id) {
        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());
        return $nilai;
    }

    public function destroy($id) {
        return Nilai::destroy($id);
    }
}
