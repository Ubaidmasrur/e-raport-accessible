<?php
namespace App\Http\Controllers;
use PDF;

class RekapController extends Controller
{
    public function generatePDF()
    {
        $data = []; // data rekap
        $pdf = PDF::loadView('rekap.pdf', $data);
        return $pdf->download('rekap-nilai.pdf');
    }
}
