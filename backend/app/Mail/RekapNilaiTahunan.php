<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RekapNilaiTahunan extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfContent;
    public $namaSiswa;

    /**
     * Create a new message instance.
     */
    public function __construct($pdfContent, $namaSiswa)
    {
        $this->pdfContent = $pdfContent;
        $this->namaSiswa = $namaSiswa;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject("Rekap Nilai Tahunan - {$this->namaSiswa}")
                    ->view('rekap.email') // Bisa menggunakan PDF view yang sama atau khusus email
                    ->attachData($this->pdfContent, 'rekap-nilai.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
