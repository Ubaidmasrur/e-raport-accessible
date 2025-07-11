<?php
use PDF, Mail;
use App\Mail\RekapNilaiTahunan;

class RekapController extends Controller {
    public function generatePDF($id) {
        $siswa = Siswa::with('nilai.indikator')->findOrFail($id);
        $pdf = PDF::loadView('rekap.pdf', compact('siswa'));
        return $pdf->download('rekap-'.$siswa->nama.'.pdf');
    }

    public function sendToWali($id) {
        $siswa = Siswa::with('nilai')->findOrFail($id);
        $pdf = PDF::loadView('rekap.pdf', compact('siswa'))->output();
        Mail::to($siswa->wali_email)->send(new RekapNilaiTahunan($pdf, $siswa->nama));
        return response()->json(['message' => 'Email sent']);
    }
}
