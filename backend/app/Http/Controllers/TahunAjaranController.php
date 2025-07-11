<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    public function index() {
        return TahunAjaran::all();
    }

    public function store(Request $request) {
        return TahunAjaran::create($request->all());
    }

    public function update(Request $request, $id) {
        $tahun = TahunAjaran::findOrFail($id);
        $tahun->update($request->all());
        return $tahun;
    }

    public function destroy($id) {
        return TahunAjaran::destroy($id);
    }
}
