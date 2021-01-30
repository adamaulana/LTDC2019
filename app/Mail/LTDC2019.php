<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LTDC2019 extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama,$keyverif)
    {
        $this->nama     = $nama;
        $this->keyverif = $keyverif; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pengirim@gmail.com')
        ->view('user/tampilanEmail')
        ->with([
            'nama' => $this->nama,
            'keyverif' =>$this->keyverif
        ]);
    }
}
