<?php
class NilaiController extends Controller {
    public function index() { return Nilai::with(['siswa', 'indikator'])->get(); }
    public function store(Request $r) { return Nilai::create($r->all()); }
    public function update(Request $r, $id) { $n = Nilai::findOrFail($id); $n->update($r->all()); return $n; }
    public function destroy($id) { return Nilai::destroy($id); }
}
