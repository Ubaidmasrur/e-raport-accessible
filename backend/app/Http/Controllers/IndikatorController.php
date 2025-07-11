<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index() {
        return Indikator::all();
    }

    public function store(Request $request) {
        return Indikator::create($request->all());
    }

    public function update(Request $request, $id) {
        $indikator = Indikator::findOrFail($id);
        $indikator->update($request->all());
        return $indikator;
    }

    public function destroy($id) {
        return Indikator::destroy($id);
    }
}
