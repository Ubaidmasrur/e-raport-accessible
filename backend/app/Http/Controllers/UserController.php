<?php
class UserController extends Controller {
    public function index() { return User::all(); }
    public function store(Request $r) { return User::create($r->all()); }
    public function update(Request $r, $id) { $u = User::findOrFail($id); $u->update($r->all()); return $u; }
    public function destroy($id) { return User::destroy($id); }
}
