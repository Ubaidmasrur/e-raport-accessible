<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        return Siswa::all();
    }

    public function store(Request $request) {
        return Siswa::create($request->all());
    }

    public function update(Request $request, $id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return $siswa;
    }

    public function destroy($id) {
        return Siswa::destroy($id);
    }
}
