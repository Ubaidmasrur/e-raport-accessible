<?php
class IndikatorController extends Controller {
    public function index() { return Indikator::all(); }
    public function store(Request $r) { return Indikator::create($r->all()); }
    public function update(Request $r, $id) { $i = Indikator::findOrFail($id); $i->update($r->all()); return $i; }
    public function destroy($id) { return Indikator::destroy($id); }
}
