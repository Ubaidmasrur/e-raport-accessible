<?php
class SiswaController extends Controller {
    public function index() { return Siswa::all(); }
    public function store(Request $r) { return Siswa::create($r->all()); }
    public function update(Request $r, $id) { $s = Siswa::findOrFail($id); $s->update($r->all()); return $s; }
    public function destroy($id) { return Siswa::destroy($id); }
}
