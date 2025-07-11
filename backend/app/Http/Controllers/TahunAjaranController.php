<?php
class TahunAjaranController extends Controller {
    public function index() { return TahunAjaran::all(); }
    public function store(Request $r) { return TahunAjaran::create($r->all()); }
    public function update(Request $r, $id) { $t = TahunAjaran::findOrFail($id); $t->update($r->all()); return $t; }
    public function destroy($id) { return TahunAjaran::destroy($id); }
}
